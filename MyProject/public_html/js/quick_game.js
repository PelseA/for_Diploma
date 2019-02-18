
  //Массив вопросов и ответа
  var data_array = [
    ["Как называются растения сухих мест обитания, способные переносить продолжительную засуху и воздействие высоких температур?",'Гигрофиты','Ксерофиты','Мезофиты','В переводе с греческого "КСЕРОС" означает сухой. "ГИГРОС" - влажный. "МЕЗОС" - средний.',2],
    ['Какое животное зимой впадает в спячку?','Барсук','Волк','Белка','Только ОДИН представитель семейства куньих впадает зимой в спячку.',1],
    ['Самое большое озеро на планете Земля','Озеро Мичиган','Озеро Танганьика','Каспийское море','Самый крупный замкнутый водоем находится на стыке Европы и Азии.',3],
    ['Наиболее калорийный орех','грецкий орех','кокос','арахис',"...",1],
    ['Дерево - чемпион Сибири по скорости роста',"Тополь","Кедр","Береза","Летом это дерево доставляет неприятности аллергикам.",1],
    ['Из какого дерева делают спички',"Бао-баб","Ель","Осина","В этом дереве мало смолистых веществ",3],
    ['Наиболее калорийный орех',"грецкий орех","кокос","арахис","...",1],
    ['Из какого дерева делают спички',"Бао-баб","Ель","Осина","В этом дереве мало смолистых веществ",3],
    ['Дерево - чемпион Сибири по скорости роста',"Тополь","Кедр","Береза","Летом это дерево доставляет неприятности аллергикам.",1],
    ['Из какого дерева делают спички',"Бао-баб","Ель","Осина","В этом дереве мало смолистых веществ",3],
  ];

  var plus = 0;
  var number = 10;
  var cur_answer = 0;
  var count_answer = data_array.length;
  
  function number_quest() {
    if(number <= 10) {number--; 
    document.getElementById('number').innerHTML='Осталось вопросов: ' + number;
    return true;
  }
}
    
  function check(num){

    if(num == 0){ 
    
      document.getElementById('option1').style.display='block';
      document.getElementById('option2').style.display='block';
      document.getElementById('option3').style.display='block';
      document.getElementById('tip').style.display='block';
      document.getElementById('question').style.display='block';

      document.getElementById('option1').innerHTML=data_array[cur_answer][1];
      document.getElementById('option2').innerHTML=data_array[cur_answer][2];
      document.getElementById('option3').innerHTML=data_array[cur_answer][3];
      document.getElementById('tip').innerHTML=data_array[cur_answer][4];
      document.getElementById('question').innerHTML=data_array[cur_answer][0];
      
      document.getElementById('start').style.display='none';
      document.getElementById('end').style.display='inline';
      
    }else{

      if( num ==  data_array[cur_answer][5]){
        plus++;
        document.getElementById('result').innerHTML='Верно!';
      }else{
        document.getElementById('result').innerHTML="Неверно! Правильный ответ: " 
        + data_array[cur_answer][data_array[cur_answer][5]];
      }
        
      cur_answer++;
      number_quest();
      if(cur_answer < count_answer){
      
        document.getElementById('option1').innerHTML=data_array[cur_answer][1];
        document.getElementById('option2').innerHTML=data_array[cur_answer][2];
        document.getElementById('option3').innerHTML=data_array[cur_answer][3];
        document.getElementById('tip').innerHTML=data_array[cur_answer][4];
        document.getElementById('question').innerHTML=data_array[cur_answer][0];
        
      }else{
        
        document.getElementById('option1').style.display='none';
        document.getElementById('option2').style.display='none';
        document.getElementById('option3').style.display='none';
        document.getElementById('tip').style.display='none';
        document.getElementById('question').style.display='none';
        document.getElementById('end').style.display='inline';
        document.getElementById('choose').style.display='inline';
        
        var percent =  Math.round(plus/count_answer*100);       
        var res = 'Не отчаивайтесь!';
        if(percent>50) res = 'Неплохой результат!';
        if(percent>70) res = 'Хорошо!';
        if(percent>90) res = 'Вы прекрасно справились!';
        if(percent==100) res = 'Вы эрудит!';
        
        document.getElementById('result').innerHTML='Правильных ответов: ' 
        + plus + ' из ' + count_answer + ' (' + percent + '%)<br>' + res;
      }
    }
  }