<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <audio controls autoplay>
<source src="home\resources\views\Gambar jam/02-stage-1.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<div align= "right">

</div>
<div align="center">
<table width=50% border="1">

<tr style="background: #0066FF">
<td ><div align="center" class="style1"><h2 class="style4"><u>Food delivery </u></h2>
</div></td>
</tr>

<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/101-blackpepper-chicken-chop.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Gambar jam/giphy.gif"width="100">Chicken Chop </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
   <div style="" id="Q1" class="block"> <a onclick="document.all.A1.style.display=(document.all.A1.style.display=='none')?'':'none';document.all.Q1.style.display=(document.all.Q1.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A1" class="block"><b> </b>

 <br />
RM 6<br />

<b><a onclick="document.all.A1.style.display=(document.all.A1.style.display=='none')?'':'none';document.all.Q1.style.display=(document.all.Q1.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>

</tr>
<tr>
<td style="background:  #0066FF"><div align="center"><img src="home\resources\views\Food file/chicken-burger-feature.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Gambar jam/giphy.gif"width="100">Chicken Burger </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
   <div style="" id="Q2" class="block"> <a onclick="document.all.A2.style.display=(document.all.A2.style.display=='none')?'':'none';document.all.Q2.style.display=(document.all.Q2.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A2" class="block"><b> </b>

<br />
RM 3.50<br />
<b><a onclick="document.all.A2.style.display=(document.all.A2.style.display=='none')?'':'none';document.all.Q2.style.display=(document.all.Q2.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>
</tr>
<tr>
<td style="background:  #0066FF"><div align="center"><img src="home\resources\views\Food file/chicken-madras-d09bd7f.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Gambar jam/giphy.gif"width="100">Chicken Curry  </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
   <div style="" id="Q3" class="block"> <a onclick="document.all.A3.style.display=(document.all.A3.style.display=='none')?'':'none';document.all.Q3.style.display=(document.all.Q3.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A3" class="block"><b> </b>

<br />
RM 4.50<br />
<b><a onclick="document.all.A3.style.display=(document.all.A3.style.display=='none')?'':'none';document.all.Q3.style.display=(document.all.Q3.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div>
   </td>
</tr>
<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/61589069.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Gambar jam/giphy.gif"width="100">Fried Chicken  </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
    <div style="" id="Q4" class="block"> <a onclick="document.all.A4.style.display=(document.all.A4.style.display=='none')?'':'none';document.all.Q4.style.display=(document.all.Q4.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A4" class="block"><b> </b>

<br /> 
RM 4<br />
<b><a onclick="document.all.A4.style.display=(document.all.A4.style.display=='none')?'':'none';document.all.Q4.style.display=(document.all.Q4.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>
</tr>
<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/68786799-fried-penang-char-kuey-teow-which-is-a-popular-noodle-dish-in-malaysia.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Gambar jam/giphy.gif"width="100">Kuey Teow  </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
   <div style="" id="Q5" class="block"> <a onclick="document.all.A5.style.display=(document.all.A5.style.display=='none')?'':'none';document.all.Q5.style.display=(document.all.Q5.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A5" class="block"><b> </b>

<br /> 
RM 4.50<br />
<b><a onclick="document.all.A5.style.display=(document.all.A5.style.display=='none')?'':'none';document.all.Q5.style.display=(document.all.Q5.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>
</tr>

<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/chicken-shawarma-138740297-58260f943df78c6f6acabb5b.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Gambar jam/giphy.gif"width="100"> Shawarma </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
    <div style="" id="Q15" class="block"> <a onclick="document.all.A15.style.display=(document.all.A15.style.display=='none')?'':'none';document.all.Q15.style.display=(document.all.Q15.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A15" class="block"><b> </b>

<br /> 
RM 5<br>

<b><a onclick="document.all.A15.style.display=(document.all.A15.style.display=='none')?'':'none';document.all.Q15.style.display=(document.all.Q15.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>

</tr>
<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/download.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Gambar jam/giphy.gif"width="100"> Special Burger </h2><div align="right">
<a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a></div>&nbsp; 
   <div align="right"><div style="" id="Q16" class="block"> <a onclick="document.all.A16.style.display=(document.all.A16.style.display=='none')?'':'none';document.all.Q16.style.display=(document.all.Q16.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A16" class="block"><b> </b>

 <br />
RM 5<br>

<b><a onclick="document.all.A16.style.display=(document.all.A16.style.display=='none')?'':'none';document.all.Q16.style.display=(document.all.Q16.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>
</tr>
<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/lamb-chops-5-1200.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Gambar jam/giphy.gif"width="100"> Lamb Chop </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
   <div style="" id="Q17" class="block"> <a onclick="document.all.A17.style.display=(document.all.A17.style.display=='none')?'':'none';document.all.Q17.style.display=(document.all.Q17.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A17" class="block"><b> </b>

 <br />
RM 7.50<br>

<b><a onclick="document.all.A17.style.display=(document.all.A17.style.display=='none')?'':'none';document.all.Q17.style.display=(document.all.Q17.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>
</tr>
<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/roti-canai-roti-paratha-roti-prata.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="Gambar jam/giphy.gif"width="100"> Roti Canai </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
    <div style="" id="Q18" class="block"> <a onclick="document.all.A18.style.display=(document.all.A18.style.display=='none')?'':'none';document.all.Q18.style.display=(document.all.Q18.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A18" class="block"><b> </b>

<br />
RM 1.20<br>

<b><a onclick="document.all.A18.style.display=(document.all.A18.style.display=='none')?'':'none';document.all.Q18.style.display=(document.all.Q18.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>
</tr>

<tr>
<td style="background: #0066FF"><div align="center"><img src="home\resources\views\Food file/Tom_yam_kung_maenam.jpg" width="300"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Gambar jam/giphy.gif"width="100">Tom Yam </h2>
<div align="right"><a href="file:Next Jam 3.html"target="_blank"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Buy">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM></a>&nbsp;
    <div style="" id="Q19" class="block"> <a onclick="document.all.A19.style.display=(document.all.A19.style.display=='none')?'':'none';document.all.Q19.style.display=(document.all.Q19.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div>
<div style="display: none;" id="A19" class="block"><b> </b>

<br />
RM 3.50<br />


<b><a onclick="document.all.A19.style.display=(document.all.A19.style.display=='none')?'':'none';document.all.Q19.style.display=(document.all.Q19.style.display=='none')?'':'none'" href="javascript:"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Close">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT></FORM> </a></b></div></div></td>

</tr>


</table>
</div>
<br />
<br />
<div align="center">
<table width=13% border="10"  bordercolor="#0066FF">
<tr style="background: #0066FF">
<td colspan="3"><div  align="center"><h3>Links</h3></div></td>
</tr>
<tr style="background: #0066FF">
<td>
 <div align="center"><a href="file:Next Jam 2.html"><FORM NAME="Form1">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT>
   <input type="Button" name="Button2" value="Contact" />
 </FORM></a>&nbsp;</div></td>
  <td>
<div align="center"><a href="file:Website Jam.html"><FORM NAME="Form1">
   <INPUT TYPE="Button" NAME="Button1" VALUE="Details">
   <SCRIPT FOR="Button1" EVENT="onClick" LANGUAGE="VBScript">
      MsgBox "Button Pressed!"
   </SCRIPT>
   
</FORM></a></div></td>
</tr>

</table>
</div>
<br />
<br />
   
 
  

    </body>
</html>
