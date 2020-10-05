@extends('layouts.admin')

@section('content')
@extends('layouts.admin')

@section('content')
     <div class="content-wrapper">
              <div class="content">
                <div class="card card-default">
                  <div class="px-6 py-4">
                    <p>
                        <span class="text-secondary text-capitalize"> Questions </span> 
                    </p>
                  </div>
                </div>
                 <div class="card card-default">
                     <div class="card-header">
                        <h2>Question</h2>
                        <a class="btn mdi mdi-code-tags" href="{{ route('question.create') }}"> Create Question</a>
                     </div>
                     <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                           <thead>
                              <tr>
                                 <th>S/N</th>
                                 <th>Category</th>
                                 <th>Question</th>
                                 <th>Point</th>
                                 <th>Answers</th>
                                 <th>Title</th>
                              </tr>
                           </thead>
                           <tbody>
                            @foreach($questionOption as $key => $question)
                              <tr>
                                 <td class="py-0">
                                   {{ ++$key }}
                                 </td>
                                 <td>
                                    {{ $questionOption->question->question ?? '' }}
                                 </td>
                                 <td>

                                {{ $questionOption->option_text ?? '' }}
                                 </td>
                                 <td>
                                    {{ $question->points ?? '' }}
                                 </td>
                                 <td>
                                    <span style="display:none">{{ $questionOption->is_correct ?? '' }}</span>
                                 </td>
                                 <td>
                                     <a class="btn btn-xs btn-info" href="{{ route('question-options.edit', $questionOption->id) }}">
                                        Edit
                                    </a>
                                     <form action="{{ route('question-options.destroy', $questionOption->id) }}" method="POST" onsubmit="return confirm('Are You Sure?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
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

@endsection
