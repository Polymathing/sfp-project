@extends('layouts.master')

@section('title')
Dashboard | SmartFastPay
@endsection

@section('content')

$classes = $node->getClassesAndTraits();

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Exchange Rates</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Currency
              </th>
              <th>
                Base
              </th>
              <th>
                Rate
              </th>
              <th class="text-right">
                Date
              </th>
            </thead>


            <tbody>

              <tr>
                <td>
                  USD
                </td>
                <td>
                  EUR
                </td>
                <td>
                  1.1782
                </td>
                <td class="text-right">
                  2021-03-26
                </td>
              </tr>

              <tr>
                <td>
                  BRL
                </td>
                <td>
                  EUR
                </td>
                <td>
                  6.711
                </td>
                <td class="text-right">
                  2021-03-26
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">

  </div>
</div>

@endsection

@section('scripts')

@endsection