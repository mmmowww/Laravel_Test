


 <style>
   .tab input, .tab-content { display: none; }
   .tab {
    font: 0.8rem/1.2 Arial, sans-serif; /* Параметры шрифта */
    border: 1px solid #e9eaec; /* Параметры рамки */
    border-radius: 3px; /* Скругляем уголки */
    color: #848994; /* Цвет текста */
    margin-bottom: 10px; /* Расстояние между пунктами */
   }
   .tab-title {
    padding: 10px; /* Поля вокруг текста */
    display: block; /* Блочный элемент */
    text-transform: uppercase; /* Все буквы заглавные */
    font-weight: bold; /* Жирное начертание */
    cursor: pointer; /* Вид курсора */
   }
   .tab-title::after {
    content: '+'; /* Выводим плюс */
    float: right; /* Размещаем по правому краю */
   }
   .tab-content {
    padding: 10px 20px; /* Поля вокруг текста */
   }
   .tab :checked + .tab-title {
    background-color: #50a2de; /* Цвет фона */
    border-radius: 3px 3px 0 0; /* Скругляем уголки */
    color: #fff; /* Цвет текста */
   }
   .tab :checked + .tab-title::after {
    content: '−'; /* Выводим минус */
   }
   .tab :checked ~ .tab-content {
    display: block; /* Показываем содержимое */
   }
  </style>
 <div class="accordion">
  @foreach($news as $MyNews)
  <div class="tab">
    <input type="checkbox" id="tab{{$MyNews->id}}" name="tab-group">
        <label for="tab{{$MyNews->id}}" class="tab-title">{{$MyNews->NameNews}}</label>
        <section class="tab-content">
          <a href = '/news/{{$MyNews->id}}'>{{$MyNews->NameNews}}</a>
          </br>
           {{$MyNews->News}}
        </section>

     </br>


         </div>

     </div>
@endforeach
</div>
