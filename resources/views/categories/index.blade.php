@extends('layouts.admin')

@section('content')
  <div class="content-wrapper">
              <div class="content">
                <div class="card card-default">
                  <div class="px-6 py-4">
                    <p>
                        <span class="text-secondary text-capitalize"> Categories </span> 
                    </p>
                  </div>
                </div>
                 <div class="card card-default">
                     <div class="card-header">
                    <h2>Categories</h2>
                        <a class="btn mdi mdi-code-tags" href="{{ route('question.create') }}"> Create Category</a>
                     </div>
                     <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                           <thead>
                              <tr>
                                 <th>S/N</th>
                                 <th>Name</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach($categories as $key => $category)
                              <tr>
                                 <td class="py-0">
                                   {{ ++$key }}
                                 </td>
                                 <td>
                                    {{ $category->name ?? '' }}
                                 </td>
                                 <td>
                                    <a class="btn btn-xs btn-info" href="{{ route('categories.edit', $category->id) }}">
                                        Edit
                                    </a>
                                     <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="DELETE">
                                    </form>
                                     
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
              </div>
           </div>
@endsection
