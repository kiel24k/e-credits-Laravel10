@extends('admin.index')
@section('admin')
    <section class="section-income">
        {{-- flex --}}
        <div class="income-content">
            <div class="income-user">
                <b>Ordered</b>
                <p>{{$owner}}</p>

            </div>
            <div class="income-value">
                <b>Income</b>
                <p>₱{{ $income }}</p>

            </div>
        </div>
    </section>
@endsection
