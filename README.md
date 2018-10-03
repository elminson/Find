# Find Data

Given a File with files name 
return the file name ignoring the first part 
example kaskdfasdf_A.txt should return A.txt
Should return only files that finish with A to Z with any extension


More info about regular expresions 

https://www.phpliveregex.com/


### Test

with the tests/input.txt

result 
```
// default pattern => /[A-Z](.*)/

Array
(
    [0] => A.txt
    [1] => A.cpp
    [2] => A.cs
    [3] => A.java
)
//Extensions
Array
(
    [0] => .txt
    [1] => .cpp
    [2] => .cs
    [3] => .java
)

//pattern => /[a-z](.txt)/
Array
(
    [0] => a.txt
    [1] => b.txt
    [2] => c.txt
)

//Extensions
Array
(
    [0] => .txt
    [1] => .txt
    [2] => .txt
)
```