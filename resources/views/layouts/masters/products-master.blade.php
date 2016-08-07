@extends('layouts.app')
<!--Title-->
@section('htmlheader_title') Products Master @endsection

@section('main-content')
<div class="col-xs-12">
    <div class="portion portion-75">
        <!--Sections in Content Header-->
        @section('contentheader_title'){{ trans('message.master-products') }}@endsection
        @section('button')
        <button class="btn-primary">+ New Product</button>
        @endsection
        <!--Content Header-->
        @include('layouts.partials.contentheader')
        <?php $i = 1; ?>
        
        <div class="table-responsive">
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Sl.No.</th>
                        <th>Product Code</th>
                        <th>Part Type</th>
                        <th>Box Type</th>
                        <th>Length</th>
                        <th>Breadth</th>
                        <th>Height</th>
                        <th>Ply</th>
                        <!--<th>Roll Size</th>-->
                        <!--<th>Cut Size</th>-->
                        <th>A-Base</th>
                        <th>A-Flute</th>
                        <th>B-Base</th>
                        <th>B-Flute</th>
                        <th>Top</th>
                    </tr>
                </thead>
                <tbody>                    
                    @foreach($products as $product)
                    <tr>
                        <td><?php // echo $i; ?></td>
                        <td><?php // echo $product->product_code; ?></td>
                        <td><?php // echo $product->part_type; ?></td>
                        <td><?php // echo $product->box_type; ?></td>
                        <td><?php // echo $product->length; ?></td>
                        <td><?php // echo $product->breadth; ?></td>
                        <td><?php // echo $product->height; ?></td>
                        <td><?php // echo $product->ply; ?></td>
                        <td><?php // echo $product->gsm_a_base; ?></td>
                        <td><?php // echo $product->gsm_a_flute; ?></td>
                        <td><?php // echo $product->gsm_b_base; ?></td>
                        <td><?php // echo $product->gsm_b_flute; ?></td>
                        <td><?php // echo $product->gsm_top; ?></td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


