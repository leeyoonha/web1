<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP tutorials</title>
  <link rel="stylesheet" href="../home_css/php_main.css">
  <script src="../home_js/jquery-3.2.1.min.js"></script>
  <script src="../home_js/jquery-ui.min.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>
<body>
<div id="container">
  <header>
      <h1>PHP reference</h1>
  </header>
<nav>
<table id="menu">
      <tr>
      <td>HTML</td>
      <td>CSS</td>
      <td>JAVASCRIPT</td>
      <td>jQUERY</td>
      <td>PHP</td>
      <td>MYSQL</td>
      <td>CANVAS</td>
      </tr>
      </table>
</nav>

<div class="contents">
     <div id="accordion">
        <h5>-PHP-</h5>
        <div class="section">
          <strong>PHP(Hypertext Preprocessor)</strong>
          <p>
            동적 웹 페이지를 만들기 위해 설계되었다. <br/>
            PHP는 인터페이스 방식의 자체 인터프리터를 <br/>
            제공하여 이를 통해 범용 프로그래밍 언어로도<br/>
            사용할 수 있으며 그래픽 애플리케이션을 제작<br/>
            할 수도 있다.<br/>
            오픈 소스 프로젝트에 의해 개발되므로 누구든지<br/>
            소스를 받아 수정하고 재배포할 수 있다.
          </p>
          <a href="http://php.net/manual/en/" target="_blank">참조사이트: http://php.net</a>
        </div>
         <h5>-Basic syntax-</h5>
          <div class="section">
             &lt?php<br/>
              <br/>
              ?&gt
          </div>
         <h5>-PHP에서의 주석-</h5>
            <div class="section">
              // 한 줄 주석<br/>
              # 한 줄 주석<br/>
              /* */ 여러 줄 주석<br/>
            </div>
         <h5>-변수- TYPE</h5>
            <div class="section">
              <strong>변수 Type</strong>
              <ul>
                <li>boolean</li>
                <li>integer</li>
                <li>부동소수점(floating point)</li>
                <li>string</li>
                <li>array</li>
                <li>object</li>
                <li>resource</li>
                <li>null</li>
              </ul>
              </div>

              <h5>-변수- SCOPE</h5>
              <div class="section">
                <strong>변수의 범위</strong><br/>
                &lt?php<br/>
                $a = apple;<br/>
                function my_fruit(){ <br/>
                  global $a;   //전역함수 선언 <br/>
                  echo $a; <br/>
                } <br/>
                <br/>
                my_fruit();<br/>
                ?&gt<br/><br/>
              </div>

              <h5>-변수- static vaiable</h5>
              <div class="section">
                <strong>static vaiable(정적변수)</strong><br/>
                function my_var(){<br/>
                  static $a = 0; //정적변수의 선언 <br/>
                  echo $a;<br/>
                  $a++;<br/>
                }<br/><br/>
                my_var(); //결과 0 출력<br/>
                my_var(); //결과 1 출력<br/>
                my_var(); //결과 2 출력
              </div>

              <h5>-상수- Constant</h5>
              <div class="section">
                <strong>Constant 상수:</strong><br/>
                상수는 대문자로 표기하는 것이 관례입니다.
                &lt?php<br/>
                  define ("CITY","seoul");<br/>
                  echo CITY;<br/>
                ?&gt<br/>
                // 결과 seoul 을 출력
              </div>

         <h5>-연산자- 논리연산자</h5>
            <div class="section">
              <strong>조건에 대해 true, false을 판단하는 연산자.</strong>
              <table class="ttble">
                <tr><th>AND 연산자</th><td>$a and $b</td><td>두 변수가 모두 참이면 true</td></tr>
                <tr><th>OR 연산자</th><td>$a or $b</td><td>두 변수중 하나만 참이어도 true</td></tr>
                <tr><th>XOR 연산자</th><td>$a or $b</td><td>두 변수중 하나만 참이어도 true,<br/>두 변수의 진리값이 같으면 false</td></tr>
                <tr><th>NOT 연산자</th><td>!$a</td><td>변수가 거짓이면 true, 참이면 false</td></tr>
                <tr><th>AND 연산자</th><td>$a && $b</td><td>두 변수가 모두 참이면 true</td></tr>
                <tr><th>OR 연산자</th><td>$a || $b</td><td>두 변수중 하나만 참이어도 true</td></tr>
              </table>
            </div>

            <h5>-연산자- 문자열 연산자</h5>
            <div class="section">
              <strong>" . " 기호를 사용하여 문자열을 연결합니다.</strong>
              $a="Hello"; <br/>
              $b="World"; <br/>
              echo $a." ".$b; //결과 Hello World <br/>
            </div>

            <h5>-연산자- 배열 연산자</h5>
            <div class="section">
              <strong>" + " 기호를 사용하면 왼쪽의 배열에 오른쪽 배열을 더합니다.</strong><br/><br/>
              $a = array("a"=>"수학", "b"=>"영어"); <br/>
              $b = array("a"=>"미술", "b"=>"국어", "c"=>체육); <br/>
              $c = $a+$b;<br/>
              var_dump($c);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//결과 <br/>
              $c=array("a"=>"수학,"b"=>"영어"c"=>"체육")
            </div>

            <h5>-반복문- while</h5>
            <div class="section">
              <strong>반복문(LOOP)</strong><br/>
              $a =1;<br/>
              while($a < 10)<br/>
              {<br/>
                echo $a++."&lt;br&gt;";<br/>
              }
            </div>

            <h5>-반복문- do while</h5>
            <div class="section">
              <strong>do~while문은 명령문이 무조건 한 번은 실행되고 난 후 검사한다.</strong><br/>
              $a =10;<br/>
              do{<br/>
                 echo $a++;<br/>
              }while($a < 9 );<br/><br/>
              <b>무조건 한 번은 실행된다.</b>
            </div>

            <h5>-반복문- for</h5>
            <div class="section">
              <strong>for(초기값; 조건식; 증감문)</strong><br/><br/>
              for($a=1; $a<10; $a++){<br/>
                  echo $a;<br/>
              }<br/>
              //결과: 123456789 출력
              </div>

            <h5>-제어문- if</h5>
            <div class="section">
              <strong>PHP의 흐름을 제어한다.</strong><br/>
              $a =5;<br/>
              if($a < 3)<br/>
              {<br/>
                echo $a."은"." "."3 이하이다.";<br/>
                }else{echo $a."은"." "."3 이상이다.";}<br/>
              </div>

           <h5>-제어문- break</h5>
           <div class="section">
             <strong>특정 조건에서 루프를 빠져나올때 쓴다.</strong><br/><br/>
             $a = 1; <br/>
             while($a<100){ <br/>
               echo $a++; <br/>
               if($a>50)break; <br/>
             }
           </div>

           <h5>-제어문- continue</h5>
           <div class="section">
            <strong>
              continue는 루프 구조에서 현재 루프의 남은<br/>명령문을 생략하고 루프의 처음으로 이동시킨다.<br/>
              contiune는 break에 반해 루프를 빠져나오지<br/> 않는다는 차이가 있다.<br/>
            </strong>
           </div>

           <h5>-제어문- switch</h5>
           <div class="section">
             $a=2; <br/><br/>
             switch($a){<br/>
               case "1":<br/>
                   echo "사과";<br/>
                   break;<br/>
               case "2":<br/>
                   echo "자두";<br/>
                   break;<br/>
               case "3":<br/>
                   echo "복숭아";<br/>
                   break;<br/>
               case "4":<br/>
                   echo "수박";<br/><br/>
                   break;<br/>
               default:<br/>
               echo "과일종류";<br/>
             }
           </div>

           <h5>-include & require-</h5>
           <div class="section">
             <strong>
               include와 require는 다른 파일을 가져와서 해당<br/>
               위치에 파일의 내용을 재활용 할 수 있다.<br/>
               둘의 차이점은 include는 warning을 출력<br/>
               require는 error를 발생시킨다.<br/>
               include는 wanning만 출력하고 프로그램이<br/>
               계속 수행된다. require는 에러가 발생하며 프로그<br/>
               램이 더 이상 실행되지 않는다.<br/><br/>
             </strong>
               ex)<br/>
               include 'helloworld.html';<br/>
               echo my_func();  //hello.html의 함수를 사용.<br/><br/>
               ex)<br/>
               require 'helloworld.html';<br/>
               echo my_func();  //hello.html의 함수를 사용.<br/>

           </div>

           <h5>-FORM-</h5>
           <div class="section">
           <strong>Form 태그의 속성과 이벤트 처리 함수</strong><br/>
           &lt;form name = "폼이름" action="주소" method="처리방식"&gt; <br/>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; html요소 <br/>
           &lt;form&gt;
           <table class="ttble">
             <tr><th>속성</th><th>설명</th></tr>
             <tr><td>name</td><td>폼의 이름</td></tr>
             <tr><td>action</td><td>폼의 정보가 전달될 주소</td></tr>
             <tr><td>method</td><td>폼의 정보 전달 방식 (GET 과 POST)</td></tr>
             <tr><td>enctype</td><td>폼 데이터의 인코딩 타입<br/>post방식일때만 적용</td></tr>
             <tr><td>target</td><td>폼 데이터의 처리 후 보여줄 프레임이나 창의 이름</td></tr>
           </table> <br/>
           <table class="ttble">
             <tr><th>이벤트 핸들러</th><th>설명</th></tr>
             <tr><td>onsubmit</td><td>sumit을 실행하였을 때 이벤트 처리</td></tr>
             <tr><td>onreset</td><td>reset을 실행하였을 때 이벤트 처리</td></tr>
           </table>
           </div>

           <h5>-FORM- INPUT</h5>
           <div class="section">
             <strong>INPUT태그는 텍스트 값의 입력과 버튼, 체크 상자, 라디오상자 생성</strong><br/>
             <table class="ttble">
             <tr><th>TYPE</th><th>설명</th></tr>
             <tr><td>TEXT</td><td>일반 텍스트 입력 상자</td></tr>
             <tr><td>PASSWORD</td><td>비밀번호 입력 상자</td></tr>
             <tr><td>FILE</td><td>파일 선택 상자</td></tr>
             <tr><td>CHECKBOX</td><td>체크 상자</td></tr>
             <tr><td>RADIO</td><td>라디오 버튼</td></tr>
             <tr><td>BUTTON</td><td>일반 버튼</td></tr>
             <tr><td>SUBMIT</td><td>쿼리 전송 버튼</td></tr>
             <tr><td>RESET</td><td>초기화 버튼</td></tr>
             <tr><td>IMAGE</td><td> 이미지 버튼</td></tr>
             <tr><td>HIDDEN</td><td>숨겨진 필드</td></tr>
             <tr><td>SELECT</td><td>하나 이상의 항목을 선택할 때</td></tr>
             <tr><td>TEXTAREA</td><td>여러줄의 긴 글을 쓸 때</td></tr>
             </table>
           </div>

           <h5>-FORM- GET or POST</h5>
           <div class="section">
             <strong>GET방식: url로 정보를 전달,<br/> POST방식: REQUEST BODY를 통해서 전달</strong><br/><br/>
             php 설정에서 post 방식으로 전송할 수 있는 크기를 제<br/>한하고 있다. php.ini파일에서 max_post_size 값을<br/>
             늘려서 이 제한을 변경할 수 있다.
           </div>

           <h5>-FUNCTION- 함수</h5>
           <div class="section">
             <strong>
               PHP에서 제공하는 내장함수와<br/>
               사용자 정의 함수가 있다.<br/><br/>
             </strong>
               function my_sum($a=1, $b=2){  <br/>
                 return $a+$b;  <br/>
               }  <br/>
               echo my_sum();  <br/>
           </div>

           <h5>-FUNCTION- 날짜와 시간 함수</h5>
           <div class="section">
             <table class="ttble">
               <tr><th>함수 이름</th><th>설명</th></tr>
               <tr><td>checkdate</td><td>주어진 날짜가 실제 존재하는 날짜인지 판단</td></tr>
               <tr><td>date</td><td>날짜와 시간을 지정한 형식에 맞추어 반환</td></tr>
               <tr><td>getdate</td><td>날짜와 시간을 배열로 반환</td></tr>
               <tr><td>microtime</td><td>유닉스 형식의 시간으로 반환</td></tr>
               <tr><td>mktime</td><td>주어진 시간을 유닉스 형식의 시간으로 반환</td></tr>
               <tr><td>time</td><td>현재의 시간을 유닉스 형식의 시간으로 반환</td></tr>
             </table><br/>
             checkdate(int month, int day, int year)<br/>

             <table class="ttble">
               -date- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="php_date_att.html" target="_blank">링크: date() 함수에서의 날짜 표현</a>
               <tr><th>인자</th><th>자료형</th><th>설명</th><th>비고</th></tr>
               <tr><td>format</td><td>string</td><td>시간과 날짜의 반환 형식을 지정</td><td>필수</td></tr>
               <tr><td>timestamp</td><td>int</td><td>특정 시간을 지정한다.</td><td>옵션</td></tr>
             </table><br/>
             <strong>getdate</strong>
             getdate([int timestamp])<br/>
             날짜와 시간을 주어진 형식에 맞추어 문자열로 반환.<br/>

            <table class="ttble">
              <a href="php_date_att.html" target="_blank">링크: getdate() 함수에서의 날짜 표현</a>
              <tr><th>인자</th><th>자료형</th><th>설명</th><th>비고</th></tr>
              <tr><td>timestamp</td><td>int</td><td>특정 시간을 지정한다.</td><td>옵션</td></tr>
            </table>
           </div>

           <h5>-FUNCTION- 파일 시스템</h5>
           <div class="section">
             <table class="ttble">
               <tr><th>함수 이름</th><th>기능</th></tr>
               <tr><td>basename</td><td>경로에서 파일 이름만을 반환</td></tr>
               <tr><td>chmod</td><td>파일의 모드를 변경</td></tr>
               <tr><td>copy</td><td>파일을 복사</td></tr>
               <tr><td>dirname</td><td>경로에서 디렉토리 이름만 반환</td></tr>
               <tr><td>fclose</td><td>열려 있는 파일 포인터를 종료</td></tr>
               <tr><td>feol</td><td>파일 포인터가 파일의 끝에 있는지 검사</td></tr>
               <tr><td>fgetc</td><td>파일로 부터 하나의 문자를 가져옴</td></tr>
               <tr><td>fgets</td><td>파일로 부터 한줄의 데이터를 가져옴</td></tr>
               <tr><td>file_exists</td><td>파일이 존재하는지 여부를 확인</td></tr>
               <tr><td>file</td><td>파일 전체를 배열로 읽어들임</td></tr>
               <tr><td>filesize</td><td>파일의 크기를 반환</td></tr>
               <tr><td>filetype</td><td>파일의 형식을 반환</td></tr>
               <tr><td>fopen</td><td>파일이나 URL을 연다</td></tr>
               <tr><td>fpassthru</td><td>파일 포인터로 부터 파일의 끝까지의 모든 데이터를 출력</td></tr>
               <tr><td>fplus,fwrite</td><td>파일 포인터에 지정한 크기의 문자열을 쓴다</td></tr>
               <tr><td>fread</td><td>파일로 부터 지정된 크기의 데이터를 읽음</td></tr>
               <tr><td>is_dir</td><td>디렉토리인지 여부를 반환</td></tr>
               <tr><td>is_file</td><td>파일인지 여부를 반환</td></tr>
               <tr><td>is_uploaded_file</td><td>업로드된 파일인지 여부를 반환</td></tr>
               <tr><td>mk_dir</td><td>디렉토리를 생성</td></tr>
               <tr><td>move_uploaded_file</td><td>업로드된 파일을 지정한 위치로 이동</td></tr>
               <tr><td>readfile</td><td>파일의 모든 데이터를 출력</td></tr>
               <tr><td>rename</td><td>파일을 새 이름으로 변경</td></tr>
               <tr><td>rmdir</td><td>디렉토리를 삭제</td></tr>
               <tr><td>unlink</td><td>파일을 삭제</td></tr>
             </table>
           </div>

           <h5>-</h5>
           <div class="section">
           </div>

           <h5>-</h5>
           <div class="section">
           </div>

           <h5>-</h5>
           <div class="section">
           </div>
    </div>  <!--end accordion -->
</div> <!--end contents -->

</div>  <!--end container -->


</body>
</html>
<!--
    <h5>-</h5>
    <div class="section">

    </div>
-->
