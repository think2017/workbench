

##基本命令
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



##替换当前行中第一个(第一个)AAA为aaa
 * :s/AAA/aaa/

##替换当前行中所有的(第一个)AAA为aaa
 * :s/AAA/aaa/g


##替换从第n行开始到文本结尾中的(第一个)AAA为aaa
 * :n,$s/AAA/aaa/

##替换从第n行开始到文本结尾中的(所有)AAA为aaa
 * :n,$s/AAA/aaa/g



##显示文件当前格式
 * :set fileformat

##设置文件格式
 * :set fileformats=unix,dos



##设置编码(~/.vimrc)
 * :set encoding=utf-8
 * :set fileencodings=ucs-bom,utf-8,cp936
 * :set fileencoding=gb2312
 * :set termencoding=utf-8


 
##其他设置(~/.vimrc)
 * set num
 * set ts=4
 * set autoindent
