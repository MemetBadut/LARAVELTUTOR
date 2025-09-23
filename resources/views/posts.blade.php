<x-layout :title="$title">

    <x-slot:dashboard> {{ $dashboard }} </x-slot:dashboard>

    <article class="py-8 max-w-md border-b border-amber-950">
        <h2 class="mb-3 text-3xl font-bold text-gray">Apa itu mie Ayam?</h2>
        <div class="text-base text-gray-300">
            <a href="#">Bapak Mulprobo</a> | 23 Maret 2029
        </div>
        <p class="text-justify my-3.5 font-light">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus incidunt libero obcaecati iusto veniam
            accusantium tempora officia deserunt animi veritatis repudiandae atque fugiat dolore, aspernatur nam debitis
            sint voluptatibus quia!
        </p>
        <a href="#" class="font-medium text-blue-500">Read More &raquo;</a>
    </article>
    <article class="py-8 max-w-md border-b border-amber-950">
        <h2 class="mb-3 text-3xl font-bold text-gray">Apa itu mie Ayam?</h2>
        <div class="text-base text-gray-300">
            <a href="#">Bapak Yonobowo</a> | 20 OKtober 2029
        </div>
        <p class="text-justify my-3.5 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore delectus incidunt rem repudiandae ducimus!
            Placeat nemo iusto, libero magnam necessitatibus sequi dolorum atque hic. Nemo accusamus sapiente non
            delectus tenetur?
        </p>
        <a href="#" class="font-medium text-blue-500">Read More &raquo;</a>
    </article>

</x-layout>
