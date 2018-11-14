@extends('layouts.MainLayout')
@section('con')
    <div class="col col-lg-12 row" style="display: none;" id="date">
        <div class="col col-lg-1">
            <i class="fa fa-arrow-left" aria-hidden="true" style="font-size: 25px; color: #6f6364; margin-top: 3px; cursor: pointer;" onclick="movingDate('back')"></i>
        </div>
        <div class="col col-lg-10 text-center">
            <h4 id="dateText"></h4>
        </div>
        <div class="col col-lg-1 text-right">
            <i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 25px; color: #6f6364;margin-top: 3px; cursor: pointer;"onclick="movingDate('next')"></i>
        </div>
    </div>
    <div class="col-lg-12">
        <table class="table table-reflow table-hover table-bordered table-sm">
            <thead>
            <tr id="listGroups">
            </tr>
            </thead>
            <tbody id="tableSubject">
            </tbody>
        </table>
    </div>
@endsection
