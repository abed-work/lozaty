@extends('layouts.admin-layout')

@section('body')
  <div class="card">
    <div class="card-header col-2">
        <div class="left"><i class="fas fa-video"></i> All Videos</div>
        <div class="right add-new">
            <a href="{{route('dashboard.videos.create')}}"><i class="fas fa-plus"></i> New video </a>
        </div>
    </div>
    <div class="card-body">
      <table>
        <thead>
            <th>#</th>
            <th>Featured Image</th>
            <th>Title EN</th>
            <th>Youtube Link Id</th>
            <th>Is Featured</th>
            <th>Operation</th>
        </thead>
        <tbody>
            @foreach ($videos as $video)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{asset('storage/images/'.$video->featured_image)}}" alt="" width="50px" height="50px"></td>
                    <td>{{$video->title}}</td>
                    <td>{{$video->link}}</td>
                    <td>
                      @if ($video->isFeatured)
                        <i class="fas fa-check"></i>
                      @else
                        <i class="fas fa-times"></i>
                      @endif
                    </td>
                    <td class="operation">
                    <div><a href={{route('dashboard.videos.show',['video'=>$video->id])}}><i class="fas fa-eye"></i></a></div>
                    <div><a href={{ route('dashboard.videos.edit', ['video'=>$video->id]) }}><i class="fas fa-edit"></i></a></div>
                    <div>
                        <form class="delete-form" action={{ route('dashboard.videos.destroy', ['video'=>$video->id]) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash-alt delete"></i></button>
                        </form>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection