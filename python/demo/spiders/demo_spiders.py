#coding:utf-8

import re
import json
from scrapy.spider import BaseSpider

class DemoSpider(BaseSpider):
    name = "demo"
    allowed_domains = ["dmoz.org"]
    start_urls = [
        "http://www.autohome.com.cn/66/options.html"
    ]

    # parse document
    def parse(self, response):
        option = re.findall(r"var option = (.*);", response.body)
        print "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
        _str = option[0].decode("GB2312");
        _data = json.loads(_str, encoding="UTF-8")
        #print json.dumps(_data, ensure_ascii=False)
        
        _configs = _data["result"]["configtypeitems"]
        
        car_info = dict()
        first_item = _configs[0]["configitems"][0]["valueitems"]

        # init car_info keys
        for i in range(0, len(first_item)):
            _id = int(first_item[i]["specid"])
            car_info[_id] = dict()
            
        
        # set car_info data
        for i in range(0, len(_configs)):
            #print "\t" + _configs[i]["name"]
            _configis = _configs[i]["configitems"]

            for j in range(0, len(_configis)):
                #print "\t\t" + _configis[j]["name"]
                _values = _configis[j]["valueitems"]
                for k in range(0, len(_values)):
                    _id = _values[k]["specid"]
                    #print "\t\t\t" + str(_id) + " : " + _values[k]["value"]
                    
                    if i not in car_info[_id] :
                        car_info[_id][i] = dict()
                        car_info[_id][i]['items'] = dict()

                    if j not in car_info[_id][i]['items'] :
                        car_info[_id][i]['items'][j] = dict()

                    car_info[_id][i]['title'] = _configs[i]["name"]
                    car_info[_id][i]['items'][j]['title'] = _configis[j]["name"]
                    car_info[_id][i]['items'][j]['value'] = _values[k]["value"]
        
        self.save(car_info)
        #_map = {'扬声器数量':'A','氙气大灯':'AB','LED大灯':'ABC','日间行车灯':'ABCD','全景摄像头':'ABCDE'}
        #_tag = _map.get('全景摄像头')
        #print _tag
        #print json.dumps(car_info, ensure_ascii=False)
        #open("page.html", 'wb').write(response.body)
        #open("test.html", 'wb').write(option[0])
        

    # save db
    def save(self, car_info):
        for car_id in car_info :
            for i in car_info[car_id] :
                #print car_info[car_id][i]['title']
                for j in car_info[car_id][i]['items'] :
                    _title = car_info[car_id][i]['items'][j]['title']
                    _map = {'扬声器数量':'A','氙气大灯':'AB','LED大灯':'ABC','日间行车灯':'ABCD','全景摄像头':'ABCDE'}
                    _tag = _map.get(_title.encode('utf-8'))
                    print _tag
                    #print car_info[car_id][i]['items'][j]['title']
                    #print car_info[car_id][i]['items'][j]['value']
                    