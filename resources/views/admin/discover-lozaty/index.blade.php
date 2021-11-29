@extends('layouts.admin-layout')

  @section('body')
    <div class="card">
    <div class="card-header">Lozaty Overview</div>
    <div class="card-body">
        <textarea name="" id="" cols="30" rows="10">
Lozaty® refreshing lozenges are food supplements used for immediate relief of sore throat and/ or nasal congestion associated with respiratory conditions such as:

Common Cold
Tonsillitis
Pharyngitis
Nasal Sinusitis
        </textarea>
        <input class="save-btn" type="submit" value="Save changes">
    </div>
  </div>

  <div class="card">
      <div class="card-header">Composition</div>
      <div class="card-body">
            <textarea name="" id="" cols="30" rows="10">
• Lozaty® lozenges  are food supplements contain natural active ingredients (menthol and eucalyptus)
• Lozaty® Lozenges as food supplements; ensure high safety as they are Gluten free and Aspartame free
            </textarea>
            <div><input class="save-btn" type="submit" value="Save changes"></div>
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
                      <th>Title</th>
                      <th>Main Image</th>
                      <th>Pop-Up Image</th>
                      <th>Operation</th>
                  </tr>
              </thead>
              <tbody></tbody>
          </table>
      </div>
  </div>

@endsection