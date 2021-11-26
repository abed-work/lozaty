@extends('layouts.admin-layout')

@section('body')
  <div class="card">
    <div class="card-header"><i class="fas fa-video"></i> All Videos</div>
    <div class="card-body">
      <table>
        <thead>
            <th>#</th>
            <th>Image</th>
            <th>Youtube Link Id</th>
            <th>Operation</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><img src="" alt=""></td>
            <td>Qbasdds</td>
            <td class="operation">
              <div><a target="_blank" href=""><i class="fas fa-eye"></i></a></div>
              <div><a href=""><i class="fas fa-edit"></i></a></div>
              <div>
                  <form class="delete-form" action="" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit"><i class="fas fa-trash-alt delete"></i></button>
                  </form>
              </div>
          </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection