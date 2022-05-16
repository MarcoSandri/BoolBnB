@extends('user.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="row justify-content-between p-4">
                    <div class="col-4"></div>
                    <div class="col-2">
                        <button class="button" href="{{route('user.apartments.create')}}">Aggiungi appartamento</button>
                    </div>
                </div>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="debug1">immagine</th>
                            <th scope="col" class="debug1">titolo</th>
                            <th scope="col" class="debug1">opzioni</th>                            
                            {{-- <th scope="col">Descrizione</th> --}}
                            {{-- <th scope="col">Numero stanze</th>
                            <th scope="col">Numero bagni</th>
                            <th scope="col">Numero letti</th>
                            <th scope="col">Metri quadrati</th>
                            <th scope="col">Latitudine</th>
                            <th scope="col">Longitudine</th> --}}
                            {{-- <th scope="col">Visibilità</th>
                            <th scope="col">Città</th>
                            <th scope="col">Indirizzo</th>
                            <th scope="col">CAP</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apartments as $apartment)
            
                            <tr>
                                <td><img src="{{ asset(Storage::url($apartment->image))}}" alt="{{$apartment->title}}"></td>
                                <td><span class="titolo_prova">{{$apartment->title}}</span>
                                    <hr> 
                                    <span class="descrizione_prova">{{$apartment->description}}</span>
                                </td>
                                {{-- <td>{{$apartment->rooms_number}}</td>
                                <td>{{$apartment->bathrooms_number}}</td>
                                <td>{{$apartment->beds_number}}</td>
                                <td>{{$apartment->square_meters}}</td>
                                <td>{{$apartment->latitude}}</td>
                                <td>{{$apartment->longitude}}</td> --}}
                                {{-- <td>{{$apartment->visibility}}</td>
                                <td>{{$apartment->city}}</td>
                                <td>{{$apartment->address}}</td>
                                <td>{{$apartment->zip_code}}</td> --}}
                                <td class="align-middle">
                                    <div class="d-flex justify-content-around align-items-center">
                                        <a href="{{route('user.apartments.show', $apartment->slug)}}"><img src="http://127.0.0.1:8000/storage/icons/normal/view.svg" alt="mostra" class="svg_dash"></a>
                                        <a href="{{route('user.apartments.edit', $apartment->slug)}}"><img src="http://127.0.0.1:8000/storage/icons/normal/edit.svg" alt="mostra" class="svg_dash"></a>
    
                                        <form method="POST" action="{{route('user.apartments.destroy', $apartment->id)}}">
    
                                            @csrf
                                            @method('DELETE')
                  
                                                {{-- chiedere conferma della cancellazione, prima di eliminare l’elemento --}}
                                                <a type="submit" onclick="return confirm('Sei sicuro?')"><img src="http://127.0.0.1:8000/storage/icons/normal/delete.svg" alt="mostra" class="svg_dash"></a>
                                        </form>
    
                                    </div>
                                </td>
                            </tr>
            
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
  
@endsection