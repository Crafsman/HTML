#http://blog.csdn.net/middlekingt/article/details/8593053
import os

file_name = 'test_file'
isexist = os.path.exists(file_name)#judge the spicific folder is exist
if isexist == False:               #if not exist
    print(isexist)
    os.makedirs(file_name)         #then make the corresponding folder
