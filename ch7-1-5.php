<H1>SID: C112181118</H1>
<BR>
NAME: Song1211-030
<P>
<?PHP
$arr["color"] = "紅色";  // 更改陣列元素值
$arr["name"] = "江小魚";
$arr["shape"] = "圓形";
$arr[] = 50;   // 沒有指定, 鍵值為0

foreach($arr as $k=>$v){
   echo "$k~=>$v~ <HR>";
}
echo "<BR/>";
print_r(value: $arr);
