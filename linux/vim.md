###基本命令
 * :w  保存
 * :x  保存并退出
 * :q  退出
 * :q! 退出不保存
 * :dd 剪帖
 * :p  粘贴
 * :dG 全部删除
 * :2yy 复制2行
 * :ggyG 全部复制
 * :ggVG 全部高亮


####复制的命令是y，即yank（提起） ，常用的命令如下： 
  * y      在使用v模式选定了某一块的时候，复制选定块到缓冲区用； 
  * yy    复制整行（nyy或者yny ，复制n行，n为数字）； 
  * y^   复制当前到行头的内容； 
  * y$    复制当前到行尾的内容； 
  * yw   复制一个word （nyw或者ynw，复制n个word，n为数字）； 
  * yG    复制至档尾（nyG或者ynG，复制到第n行，例如1yG或者y1G，复制到档尾）  
   
 
####剪切的命令是d，即delete，d与y命令基本类似，所以两个命令用法一样 
  * d      剪切选定块到缓冲区； 
  * dd    剪切整行 
  * d^    剪切至行首 
  * d$     剪切至行尾 
  * dw    剪切一个word 
  * dG     剪切至档尾  
    


###替换当前行中第一个(第一个)AAA为aaa
 * :s/AAA/aaa/

###替换当前行中所有的(第一个)AAA为aaa
 * :s/AAA/aaa/g


###替换从第n行开始到文本结尾中的(第一个)AAA为aaa
 * :n,$s/AAA/aaa/

###替换从第n行开始到文本结尾中的(所有)AAA为aaa
 * :n,$s/AAA/aaa/g



###显示文件当前格式
 * :set fileformat

###设置文件格式
 * :set fileformats=unix,dos

###显示行号
 * :set nu
 * :set nu!


###设置编码(~/.vimrc)
 * :set encoding=utf-8
 * :set fileencodings=ucs-bom,utf-8,cp936
 * :set fileencoding=gb2312
 * :set termencoding=utf-8


 
###其他设置(~/.vimrc)
 * set num
 * set ts=4
 * set autoindent
