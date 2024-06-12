<x-app> 

<div class="row">
    <div class="col-12">
        <h2>About US</h2>
    </div>
</div>

<div class="row">
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Ea nisi fugiat voluptatem sed impedit ipsa vitae qui.
        Et, nostrum? Magnam adipisci qui officia sapiente,
        amet commodi dignissimos reiciendis dolores repudiandae.
    </p>

</div>

<div class="row">
    @foreach ($team as $member)
     <div class="col-4">
        <x-card :item="$member"  test="Questo è un test"/>
     </div>
    @endforeach 

</div>


</x-app>
