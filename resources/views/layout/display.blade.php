<h1> blade 模板 输出变量值</h1>
hello:{{$name}}
{{$name}}




@if($name=='老王')
    <br>老王123
@else
   laowang
@endif




@for($i=0;$i<10;$i++)
    {{$i}}
    @endfor