<x-layouts.guest
    title="Error 404"
    h1="Error 404: página no encontrada"
    pAfterH1="La página que estás tratando de ver no existe o ha sido removida, nos disculpamos por los inconvenientes que esto pueda ocasionarte."
>

<x-slot name="otherstyle">
    <style>
            main .general1 {
                padding: 28px 387px 131px 100px !important;
        }
        @media (min-width: 1740px){
            main .general1{
                padding: 28px 484px 200px 100px !important;
            }
        }

        @media (max-width: 971px){
            main .general1 {
           padding: 28px 215px 119px 100px !important;
        }

        @media (max-width: 889px){
            main .general1 {
    padding: 28px 211px 119px 50px !important;
}
        }

        @media (max-width: 770px){
            main .general1 {
    padding: 28px 81px 119px 37px !important;
}
        }
        }
    </style>
</x-slot>

<x-slot name="imgpage">
    {{URL('img/404.svg')}}
</x-slot>

<x-slot name="buttons"> 
    <div class="botones">
        <p>Esto suele suceder cuando buscamos alguna página y escribimos mal el nombre, o bien, ya no existe o nunca existió.</p>
    </div>
</x-slot>

<x-slot name="general1">
    <div class="general1">
        <section class="esta-pagina">
            <h2>Como has llegado aquí...</h2>

    <p>Te invitamos a retornar a la página de inicio. Si has intentado buscar algún profesor y/o recomendación, te pedimos nuestras más sinceras disculpas. </p> 
    </section>
</div>
</x-slot>
</x-layouts.guest>