# 我的世界存档解密教程

*目前是复杂版*
*还没有做简化版*
**主要是懒 就先将就着用吧**

*动手能力强的可以自己搞*

***看不懂可以不看***

**手机Termux教程**

第一次进入termux先获取存储权限
~~~termux
termux-setup-storage
~~~

切换源*不切换使用默认的也可以*
~~~termux
sed -i's@^<\inline_LaTeX_Formula>deb.*stable main<\inline_LaTeX_Formula>$@#\1\ndeb https://mirrors.tuna.tsinghua.edu.cn/termux/apt/termux-main stable main@' $PREFIX/etc/apt/sources.list
apt update && apt upgrade
~~~

*不解释了自己看吧*
~~~termux
apt update && apt upgrade -y && apt install wget -y
~~~

下载Python
~~~termux
apt install python
~~~

**下载哦！**
~~~termux
apt update && apt install unzip -y
~~~

打开内部存储目录目录
~~~termux
cd /storage/emulated/0/
~~~

下载文件*访问不了可以挂个梯子*
~~~termux
wget https://github.com/HT-DJ/htdjsq/raw/5ffec1ed2243967ec16d261ae07fd6f79b5c3c83/%E6%96%87%E4%BB%B6/%E6%88%91%E7%9A%84%E4%B8%96%E7%95%8C%E7%BD%91%E6%98%93%E5%AD%98%E6%A1%A3%E8%A7%A3%E5%AF%86.zip
~~~


解压
~~~termux
unzip "我的世界网易存档解密.zip"
~~~

运行
***第一次会先安装Java***
~~~termux
/storage/emulated/0/NeteaseMcDencrypter/htdjsq.py
~~~

以后使用运行运行这个就行了
~~~python
/storage/emulated/0/NeteaseMcDencrypter/htdjsq.py
~~~
