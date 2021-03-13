# PHP Syntax Cheat beginner

## Usefull natives functions
- <span style="color:red">```isset()```</span> test for variable exists
- <span style="color:red">```empty()```</span> test for empty variable
- <span style="color:red">```var_dump($var)```</span> DEBUG : displays the information of a variable
- <span style="color:red">```header()```</span> send a header from the server (redirect to)
- <span style="color:red">```is_numeric()```</span> test to see if a value is a number
- <span style="color:red">```exit()```</span> causes script top stop immediately
- <span style="color:red">```str_replace('a','b', $string)```</span> replace a with b in a string
- <span style="color:red">```trim($string)```</span> trims leading and trainling spaces
- <span style="color:red">```explode($separator, $string)```</span> makes array of strings, each of which is a substring of the string parameter extracted using the separator 
- <span style="color:red">```implode($separator, $string)```</span> makes the elements of an array into a string 
- <span style="color:red">```count($array)```</span> count all elements in an array, or something in an object
- <span style="color:red">```echo $string```</span> displays a string
- <span style="color:red">```print_r($array)```</span> displays readable information for a variable
- <span style="color:red">```require 'file.php' ```</span> The include statement will issue E_ERROR if it cannot find the file, E_ERROR stops the script
- <span style="color:red">```include 'file.php' ```</span> The include statement will issue E_WARNING if it cannot find the file, E_WARNING doesn't stop the script

## Control structure 
### | if syntax
```
if (/*condition(s) here */) {
    // code here
}
``` 

=> or 

```
if (/*condition(s) here */) {
    // code here
} else {
    // other code here
}
```

=> or 

```
if (/*condition(s) here */) {
    // code here
} elseif (/*condition(s) here */) {
    // other code here
} else {
    // other code here
}
```
### | Switch syntax
Can be used with numbers, or strings
```
SWITCH ($param) { 
    case 1:
        // code here
    break;

    case 2: 
        // code here
    break; 

    default: 
        // code here
}
```


## Functions 
**| Simple function**
>```
>function functionName()
>{
>    // here code 
>    return $result;
>}
**| Function with parameter(s)**
>```
>function functionName(param1, param2)
>{
>    // here code uses param1 & param2
>    return $result;
>}
>```

- Call function : ```functionName();```
- Call & print result of a function : ```echo functionName();```
  
## Loops

**| FOR (loop until a condition is met)**
>```
>for($i = 0; $i < 5; $i++){
>    echo $i;
>}
>``` 
<small>
output => <br>
0 <br>
1 <br>
2 <br>
3 <br>
4 <br>
</small>

### FOREACH (loop through an array)
>```
>$array = ['Paris','c\'est','Gotham'];
>foreach ($array as $value) { 
>    echo $value;
>}
>```
<small>
output => <br>
Paris <br>
c'est <br>
Gotham <br>
</small>

### WHILE (loop through query results)

>```
>$i = 0;
>do {
>    echo $i++;
>} while ($i < 5)
>```
<small>
output => <br> 
1 <br>
2 <br>
3 <br>
4 <br>

## Arrays

- Create array :  <span style="color:red">```$myArray = array();``` or ```$myArray = [];```</span>
- Push into array :  <span style="color:red">```$myArray[] = "​Som​eth​ing​";```</span>
- Push to associ​ative array : <span style="color:red">``` $myArr​ay[​'key'] = "​Val​ue"; ```</span>
- Create numeric array : <span style="color:red">```$myArray = ['va​lue', 'value2'];```</span>
- Create associative array : <span style="color:red">```$myArray = ['ke​y1'=​>'v​al1', 'ke​y2'=​>'v​al2'];```</span>
- Print from numeric array : <span style="color:red">```echo $myArray[0];```</span>
- Print from associative array : <span style="color:red">```echo $myArray['key'];```</span>
- Print array : <span style="color:red">```print_r($myArray);```</span>
- Tips : 
  - For associative array, keys are strings (example : 'firstname', 'lastname', 'email',...)
  - For numeric array, keys are numbers (Always 0, 1, 2...)



>### [PHP DOC ONLINE](https://www.php.net/ "https://www.php.net").