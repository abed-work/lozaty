@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header">Lozaty Overview</div>
    <div class="card-body">
        <form action={{route('dashboard.overview',['id'=>$overview[0]->id])}} method="POST">
            @csrf
            <div class="form-group">
                <div class="label">Overview (EN)</div>
                <textarea name="description_en" id="" cols="30" rows="10">{{$overview[0]->description_en}}</textarea>
            </div>
            <div class="form-group">
                <div class="label">Overview (AR)</div>
                <textarea name="description_ar" id="" cols="30" rows="10" placeholder="اكتب الشرح هنا" style="direction: rtl">{{$overview[0]->description_ar}}</textarea>
            </div>
                <input class="save-btn" type="submit" value="Save changes">
        </form>
    </div>
  </div>

  <div class="card">
      <div class="card-header">Composition</div>
      <div class="card-body">
            <form action={{route('dashboard.composition',['id'=>$composition[0]->id])}} method="post">
                @csrf
                <div class="form-group">
                    <div class="label">Composition (EN)</div>
                    <textarea name="description_en" id="" cols="30" rows="10">{{$composition[0]->description_en}}</textarea>
                </div>
                <div class="form-group">
                    <div class="label">Composition (AR)</div>
                    <textarea style="direction: rtl" name="description_ar" id="" cols="30" rows="10">{{$composition[0]->description_ar}}</textarea>
                </div>
                <div><input class="save-btn" type="submit" value="Save changes"></div>
            </form>
      </div>
  </div>

  <div class="card">
      <div class="card-header col-2">
          <div class="left">Discover Lozaty Flavors</div>
          <div class="right add-new">
            <a href="{{route('dashboard.flavors.create')}}"><i class="fas fa-plus"></i> New Flavor </a>
          </div>
      </div>
      <div class="card-body">
          <table>
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Title (EN)</th>
                      <th>Title (AR)</th>
                      <th>Main Image</th>
                      <th>Pop-Up Image</th>
                      <th>Operation</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($flavors as $flavor)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$flavor->title_en}}</td>
                        <td>{{$flavor->title_ar}}</td>
                        <td><img src="{{asset('storage/images/'.$flavor->main_image)}}" alt="" width="50px" height="50px"></td>
                        <td><img src="{{asset('storage/images/'.$flavor->pop_image)}}" alt="" width="50px" height="50px"></td>
                        <td class="operation">
                            <div><a href={{ route('dashboard.flavors.show', ['flavor'=>$flavor->id]) }}><i class="fas fa-eye"></i></a></div>
                            <div><a href={{ route('dashboard.flavors.edit', ['flavor'=>$flavor->id]) }}><i class="fas fa-edit"></i></a></div>
                            <div>
                                <form class="delete-form" action={{route('dashboard.flavors.destroy', ['flavor'=>$flavor->id]) }} method="POST">
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