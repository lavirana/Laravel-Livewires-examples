@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Product Create') }}</div>
                <div class="card-body">
                   <livewire:product-creator />
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Photo Upload') }}</div>
                <div class="card-body">
                <livewire:photo-upload />
                </div>
            </div>

            <br>
            <div class="card">
                <div class="card-header">{{ __('All Category For Multiselect Practice') }}</div>
                <div class="card-body">
                   <livewire:multiselect />
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Download Files') }}</div>
                <div class="card-body">
                <livewire:images />
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('All Products') }}</div>
                <div class="card-body">
                   <livewire:products />
                </div>
            </div>
        </div>
        <div class="col-md-6">
        <div class="card">
                <div class="card-header">{{ __('Create Product with Variants') }}</div>
                <div class="card-body">
                   <livewire:create-product-with-variants />
                </div>
            </div>
<br>
            <div class="card">
                <div class="card-header">{{ __('Wizard Multi Step Form') }}</div>
                <div class="card-body">
                   <livewire:multi-step-create-product />
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Customs Tabs') }}</div>
                <div class="card-body">
                   <livewire:custom-tabs />
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Upload Product Multiple Images') }}</div>
                <div class="card-body">
                   <livewire:upload-product-multiple-images />
                </div>
            </div>
        </div>
    </div>


    <br><br>


    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Google Pie Charts') }}</div>
                <div class="card-body">
                   <livewire:google-charts />
                </div>
            </div>
        </div>
    
    </div>
<br><br>
    <div class="row justify-content-center">

<div class="col-md-12">
    <div class="card">
        <div class="card-header">{{ __('Datatables Component') }}</div>
        <div class="card-body">
        <livewire:users-table theme="bootstrap-5" />
        </div>
    </div>
</div>

</div>

</div>
@endsection
