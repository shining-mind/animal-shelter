@extends('layouts.app')
@section('content')
    <section class="section text-justify">
        <h2 class="text-center">Что делает волонтер?</h2>
        <p>Волонтер помогает приютам находить хозяев для их питомцев. Курирует выбранных питомцев, заботиться об их благосостоянии и успешной адоптации в новой семье. Волонтер может помогать в приюте, выполнять различные задачи, которые перед ним поставит представитель приюта.</p>
    </section>
    <section class="section text-justify">
        <h2 class="text-center">Как стать волонтером?</h2>
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-4">
                <ol>
                    <li>Заполнить анкету</li>
                    <li>Пройти собеседование</li>
                    <li>Выбрать приюты которым вы хотите помогать</li>
                    <li>Связаться с представителями приютов</li>
                    <li>Приступить к работе</li>
                </ol>
            </div>
            <div class="col-sm-4">
                <img src="{{ asset('/images/volunteer.png')}}" alt="" class="img-fluid">
            </div>
        </div>
    </section>
@endsection