@extends('layouts.admin')

@section('content')
     <div class="content-wrapper">
              <div class="content">
                <div class="card card-default">
                  <div class="px-6 py-4">
                    <p>
                        EnterPrise 
                        <span class="text-secondary text-capitalize"> Bookings </span> 
                    </p>
                  </div>
                </div>
                 <div class="card card-default">
                     <div class="card-header">
                        <h2>Bookings</h2>
                        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-data-tables" role="button" aria-expanded="false"
                           aria-controls="collapse-data-tables"> </a>
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
                            @foreach($questions as $key => $question)
                              <tr>
                                 <td class="py-0">
                                   {{ ++$key }}
                                 </td>
                                 <td>
                                    {{ $question->category->name ?? '' }}
                                 </td>
                                 <td>
                                    {{ $question->question ?? '' }}
                                 </td>
                                 <td>
                                    {{ $question->points ?? '' }}
                                 </td>
                                 <td>
                                    {{ $question->answer_explanation ?? '' }}
                                 </td>
                                 <td>
                                   <ol>
                                    @foreach($question->options as $option)
                                        <li @if($option->is_correct) class="font-weight-bold"@endif>
                                            {{ $option->option_text }}
                                        </li>
                                    @endforeach
                                     <a class="btn btn-xs btn-info" href="{{ route('questions.edit', $question->id) }}">
                                       Edit
                                    </a>
                                     <form action="{{ route('questions.destroy', $question->id) }}" method="POST" onsubmit="return confirm('Are You Sure..');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Submit">
                                    </form>
                                </ol>
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
