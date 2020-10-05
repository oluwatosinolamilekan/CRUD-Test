@extends('layouts.admin')

@section('content')
   <div class="content-wrapper">
              <div class="content">
                <div class="card card-default">
                  <div class="px-6 py-4">
                    <p>
                        <span class="text-secondary text-capitalize"> Create   
                           Exams                                                                                                                                                                                       
                        </span> 
                    </p>
                  </div>
                </div>
                 <div class="card card-default">
                     <div class="card-header">
                        <h2>Hotel Details</h2>
                     </div>
                     <div class="card-body">
                       <form @submit.prevent="submit">
                         <div class="row">
                              <div class="col-xl-6">
                                <div class="mb-5">
                                  <label class="text-dark font-weight-medium" for="">Name</label>
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="form.name">
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-6">
                                <div class="mb-5">
                                  <label class="text-dark font-weight-medium">State</label>
                                  <div class="input-group mb-3">
                                    <select name="" id="" class="form-control" v-model="form.state">
                                      <option value="">Lagos</option>
                                      <option value="">Benin</option>
                                      <option value="">Abuja</option>
                                    </select>
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-6">
                                <div class="mb-5">
                                  <label class="text-dark font-weight-medium">City</label>
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" v-model="form.city">
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-6">
                                <div class="mb-5">
                                  <label class="text-dark font-weight-medium">Description</label>
                                  <div class="input-group mb-3">
                                    <textarea class="form-control" rows="5" v-model="form.description"></textarea>
                                  </div>
                                </div>
                              </div>

                                <div class="col-xl-6">
                                <div class="mb-5">
                                  <label class="text-dark font-weight-medium">Image</label>
                                  <div class="input-group mb-3">
                                    <input type="file" class="form-control" v-on:change="onFileChange">
                                  </div>
                                </div>
                              </div>

                              <div class="col-xl-6">
                                <div class="mb-5">
                                  <label class="text-dark font-weight-medium">Hotel Images(Multiple)</label>
                                  <div class="input-group mb-3">
                                    <input type="file" class="form-control" multiple="multiple" >
                                  </div>
                                </div>
                              </div>
                                <button class="btn btn-primary btn-pill mr-2" type="submit">Submit</button>
                            </div>
                       </form>
                     </div>
                  </div>
              </div>
           </div>
@endsection
