@extends ('layouts.site')
@section ('title', 'Главная - Evil Empire')
@section ('content')

<section class="hero">
    <div class="container">
        <div class="hero-row">

        
            <div class="hero-text">
                <h1>Кто мы?</h1>
                <p>
                    Evil Empire — команда энтузиастов, которая создаёт нечто большее,
                    чем просто сайты. Наша цель — сделать интернет чуточку
                    мрачнее, стильнее и интереснее.
                </p>
                <a href="#" class="btn">Узнать больше</a>
            </div>

            <div class="hero-image">
                <img src=  "{{ asset('img/dark.jpg') }}"  alt="О нас">
            </div>

        </div>
    </div>
</section>

@endsection