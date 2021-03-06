@extends('layouts/nav')

@section('css')
    <!-- page css -->
    <link rel="stylesheet" href="/css/life.css">
@endsection


@section('content')
    <section>
        <h1 class="title">動物介紹</h1>
        <img class="title_wave" src="/img/material/waves/wave-34.svg" alt="">


        <img class="child" src="/img/material/child/child.svg" alt="">

        <div id="scene">

            <img class="wave_bg" data-depth="0.1" src="/img/material/waves/back_wave-15.svg" alt="">
            <img class="wave_bg" data-depth="0.2" src="/img/material/waves/back_wave-16.svg" alt="">
            <img class="wave_bg" data-depth="0.3" src="/img/material/waves/back_wave-17.svg" alt="">
            <img class="wave_bg" data-depth="0.3" src="/img/material/waves/back_wave-16.svg" alt="">
            <img class="wave_bg" data-depth="0.3" src="/img/material/waves/back_wave-17.svg" alt="">
            <img class="wave_bg" data-depth="0.3" src="/img/material/waves/back_wave-16.svg" alt="">
            <img class="wave_bg" data-depth="0.3" src="/img/material/waves/back_wave-17.svg" alt="">
            <img class="sand" src="/img/material/waves/sand-18.svg" alt="">

            <div class="fishes" data-depth="0.1">
                <img class="fish_1" data-fish="0" src="/img/material/lifes/life-05.svg" alt="">
                <img class="fish_2" data-fish="1" src="/img/material/lifes/life-06.svg" alt="">
                <img class="fish_3" data-fish="2" src="/img/material/lifes/life-07.svg" alt="">
                <img class="fish_4" data-fish="3" src="/img/material/lifes/life-08.svg" alt="">
                <img class="fish_5" data-fish="4" src="/img/material/lifes/life-09.svg" alt="">
                <img class="fish_6" data-fish="5" src="/img/material/lifes/life-10.svg" alt="">
                <img class="fish_7" data-fish="6" src="/img/material/lifes/life-11.svg" alt="">
                <img class="fish_8" data-fish="7" src="/img/material/lifes/life-12.svg" alt="">
                <img class="fish_9" data-fish="8" src="/img/material/lifes/life-13.svg" alt="">
                <img class="fish_10" data-fish="9" src="/img/material/lifes/life-14.svg" alt="">
                <img class="fish_11" data-fish="10" src="/img/material/lifes/life-15.svg" alt="">
                <img class="fish_12" data-fish="11" src="/img/material/lifes/life-16.svg" alt="">
                <img class="fish_13" data-fish="12" src="/img/material/lifes/life-32.svg" alt="">
                <img class="fish_14" data-fish="13" src="/img/material/lifes/life-18.svg" alt="">
            </div>

        </div>

        <div class="card">
            <img class="cross" src="/img/material/cross.svg" alt="">
            <div class="text_area">
                <h1>魟魚</h1>
                <p>魟科魚跟鰩科魚的身體都呈現扁平狀，常常會搞混，只要知道魟魚的尾巴上方有尖銳的毒刺，當魟魚感到威脅時會利用毒刺當作自衛武器，一但被刺到會有劇烈疼痛感、感染、心臟衰竭、甚至會有休克、死亡的風險，要馬上就醫處置。</p>
            </div>
            <img class="pic" src="./images/img_shop_1.jpg" alt="">
        </div>



        <!-- <img class="sand" src="/img/material/waves/sand-18.svg" alt=""> -->




    </section>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);
        var dataFsih = [
            {
                name: '蝦蝦',
                info: '蝦蝦好吃'
            },

            {
                name: '魚魚',
                info: '魚魚好吃'
            },
            {
                name: '牛牛',
                info: '牛牛好牛'
            },
            {
                name: '牛牛1',
                info: '牛牛好牛'
            },
            {
                name: '牛牛2',
                info: '牛牛好牛'
            },
            {
                name: '牛牛3',
                info: '牛牛好牛'
            },
            {
                name: '牛牛4',
                info: '牛牛好牛'
            },
            {
                name: '牛牛5',
                info: '牛牛好牛'
            },
            {
                name: '牛牛',
                info: '牛牛好牛'
            },
            {
                name: '牛牛6',
                info: '牛牛好牛'
            },
            {
                name: '牛牛7',
                info: '牛牛好牛'
            },
            {
                name: '牛牛8',
                info: '牛牛好牛'
            },
            {
                name: '牛牛9',
                info: '牛牛好牛'
            },
            {
                name: '牛牛10',
                info: '牛牛好牛'
            }

        ]
        $(".cross").click(function(){
            $(".card").removeClass('active')
        });

        $('.fishes').on('click',function(e){
            var fish = event.target.dataset.fish

            if(e.target.nodeName == 'IMG'){
                $('.text_area h1').text(dataFsih[fish].name)
                $('.text_area p').text(dataFsih[fish].info)

                $(".card").addClass('active')


            }


        })





    </script>
@endsection
