<div class="card" style="width: 18rem;">
           <img src=">{{$item['image']}}" class="card-img-top" alt="...">
           <div class="card-body">
           <h4>{{$item['name']}} {{$item['surname']}}</h4>
           <h5>>{{$item['email']}}</h5>
           <p>>{{$item['role']}}</p>

           <a href="{{route('member',$item['id'])}}" class="btn btn-outline-primary">Curriculum</a>
           </div>
        </div>