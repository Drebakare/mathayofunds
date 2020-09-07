@extends('layouts.admin_app')
@section('contents')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Coin Rates Management</h4>
                        <span data-toggle="modal" data-target=".addCoinRate">
                            <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Add Coin Rate">
                                    <h4 class="text-primary"><i class="mdi mdi-plus-circle mdi-36px"></i></h4>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Coin Rates</h4>
                            <div class="table-responsive mt-1">
                                <table class="table table-hover
                                dt-responsive nowrap" id="datatable-buttons"
                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Coin</th>
                                        <td>Min</td>
                                        <td>Max</td>
                                        <td>Variant</td>
                                        <th scope="col">Rate($)</th>
                                        <th scope="col">Action(s)</th>
                                    </tr>

                                    </thead>

                                    <tbody>
                                    @foreach($coin_rates as $key => $coin_rate)
                                         <tr class="{{  $coin_rate->active == 0 ? 'bg-warning' : '' }}">
                                            <td>{{$coin_rate->id}}</td>
                                            <td>{{$coin_rate->coin->name}}</td>
                                             <td>{{$coin_rate->min}}</td>
                                             <td>{{$coin_rate->max == 9999 ? "Unlimited" : $coin_rate->max }}</td>
                                             <td>{{$coin_rate->variant}}</td>
                                            <td>{{$coin_rate->usd_rate}}</td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <span data-toggle="modal" data-target=".editCoinRate-{{$key}}">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Edit Coin Rate">
                                                                <h4 class="text-primary"><i class="mdi mdi-square-edit-outline mdi-24px"></i></h4>
                                                        </a>
                                                    </span>&nbsp;&nbsp;

                                                    {{--<span data-toggle="modal" data-target=".deleteCoinRate">
                                                        <a href="#" data-toggle="tooltip" data-placement="top" title data-original-title="Delete Coin Rate">
                                                                <h4 class="text-danger"><i class="mdi mdi-delete mdi-24px"></i></h4>
                                                        </a>
                                                     </span>--}}
                                                </div>
                                            </td>
                                         </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($coin_rates as $key => $coin_rate)
        <div class="modal fade editCoinRate-{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Edit Coin Rate</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('admin.edit-coin-rate', ['token' => $coin_rate->token])}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mt-3 form-check">
                                <input type="checkbox" class="form-check-input checkbox-1x" {{ $coin_rate->active == 1 ? "checked" : "" }} name="active" /> <span class="ml-1" style="font-size: 0.9rem;"> Active</span>
                            </div>
                            <div class="mt-3">
                                <label>Min</label>
                                <input type="number" class="form-control" name="min" value="{{ $coin_rate->min }}" id="defaultconfig" required />
                            </div>

                            <div class="mt-3">
                                <label>Max</label>
                                <input type="number" class="form-control" name="max" value="{{ $coin_rate->max }}" id="defaultconfig" required />
                            </div>
                            <div class="mt-3">
                                <label> New Rate($)</label>
                                <input type="number" class="form-control" name="rate" value="{{$coin_rate->usd_rate}}" id="defaultconfig" required/>
                            </div>
                            <div class="mt-3">
                                <label class="control-label">Variant</label>
                                <select name="variant" class="form-control select2" required>
                                    <option value="">Select Variant</option>
                                    @foreach($variants as $variant)
                                        <option value="{{$variant->label}}" @if($variant->label == $coin_rate->variant) selected @endif>{{$variant->label}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update Rate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <div class="modal fade addCoinRate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Coin Rate</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.add-coin-rate')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mt-3 form-check">
                            <input type="checkbox" class="form-check-input checkbox-1x" name="active" checked /> <span class="ml-1" style="font-size: 0.9rem;"> Active</span>
                        </div>
                        <div class="mt-3">
                            <label class="control-label">Coin</label>
                            <select name="coin" class="form-control select2" required>
                                <option value="">Select Coin</option>
                                @foreach($coins as $coin)
                                    <option value="{{$coin->id}}">{{$coin->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label class="control-label">Variant</label>
                            <select name="variant" class="form-control select2" required>
                                <option value="">Select Variant</option>
                                @foreach($variants as $variant)
                                    <option value="{{$variant->label}}">{{$variant->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <label>Min</label>
                            <input type="number" class="form-control" name="min" id="defaultconfig" required />
                        </div>

                        <div class="mt-3">
                            <label>Max</label>
                            <input type="number" class="form-control" name="max" id="defaultconfig" required />
                        </div>
                        <div class="mt-3">
                            <label>Rate($)</label>
                            <input type="number" class="form-control" name="rate" placeholder="Enter The Coin's Rate ($)" id="defaultconfig" required />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Rate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .checkbox-1x {
            transform: scale(1.5);
            -webkit-transform: scale(1.5);
        }
        .checkbox-2x {
            transform: scale(2);
            -webkit-transform: scale(2);
        }
    </style>
@endsection
