@extends('layouts.main')
@section('container')

<div class="limit">
    <div class="marginer">

        <div class="concept-outer">
            <div class="concept-flex">

                @for ($i = 0; $i < 9; $i++)
                <a href="/post">
                <div class="concept-box">
                    <div class="concept-image">
                        <img src="https://contentstatic.techgig.com/photo/76118246/5-personal-characteristics-of-successful-programmers.jpg?119058" alt="Image_Concept">
                    </div>
                    <div class="concept-title">
                        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, maiores.</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, magni! Debitis dolorum omnis incidunt laboriosam atque doloribus eius laudantium voluptates cupiditate quidem laborum cum explicabo sunt odit est obcaecati labore, similique eligendi quibusdam facilis? Quas, totam laboriosam quos magni provident quia architecto nemo iusto dolorum accusamus beatae possimus libero aspernatur quis quibusdam illum sequi quam ut? Odio molestias quisquam voluptatibus quidem, velit dolorem sed minus error consequuntur reprehenderit. Nobis assumenda eveniet, quibusdam voluptate officia temporibus, illo expedita iste architecto sequi quis, distinctio fugit at tempora ex. Quo culpa assumenda deleniti unde inventore ab, maiores est, beatae eaque nobis porro numquam?</p>
                    </div>
                </div>
                </a>
                @endfor

    </div>
</div>

@endsection
