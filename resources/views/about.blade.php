@extends('layouts.app')
@section('content')
    <article class="about">
        <section class="about-section">
            <p><h2 class="about-title">Цель</h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ex impedit recusandae, itaque, totam odit et minima numquam tempora, facere eos cupiditate non sunt veniam delectus exercitationem optio voluptates accusantium?</p>
        </section>
        <section class="about-section">
            <p><h2 class="about-title">История</h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ex impedit recusandae, itaque, totam odit et minima numquam tempora, facere eos cupiditate non sunt veniam delectus exercitationem optio voluptates accusantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias perspiciatis magni libero, amet voluptatum dolore beatae. Laborum earum tempore obcaecati beatae fugiat placeat at quam architecto harum nemo, unde hic?
            Veritatis harum deserunt reiciendis incidunt dicta accusantium dolorem ab voluptatum, provident fugiat sint, commodi perspiciatis quos officia numquam alias ducimus iusto! Provident rem aut distinctio deleniti neque ipsum. Reprehenderit, alias!
            Accusamus ullam numquam deleniti cum ipsam. Ipsum omnis doloremque facere nesciunt qui quas esse sapiente, reiciendis quae rerum nam dolorum cumque similique blanditiis, consequuntur sed minima aspernatur aliquid quo est.</p>
        </section>
        <section class="about-section">
            <p><h2 class="about-title">Команда</h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ex impedit recusandae, itaque, totam odit et minima numquam tempora, facere eos cupiditate non sunt veniam delectus exercitationem optio voluptates accusantium?</p>
            <div class="row">
                @foreach ($team as $person)
                <div class="col-6 col-sm-4 col-md-3 col-lg">
                    <div class="team-card card">
                        <img class="card-img-top" src="{{ $person->image }}" alt="{{ $person->name }} - {{ $person->position }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $person->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $person->position }}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </article>
@endsection