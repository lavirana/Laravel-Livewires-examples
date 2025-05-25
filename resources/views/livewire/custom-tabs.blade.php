<div>
<div class="container mt-4">

<ul class="nav nav-tabs" >
    <li><a class="nav-link {{ $activeTab === 'details' ? 'active' : '' }}" wire:click="setActiveTab('details')">Details</a></li>
    <li><a class="nav-link {{ $activeTab === 'reviews' ? 'active' : '' }}"  wire:click="setActiveTab('reviews')">Reviews</a></li>
    <li><a class="nav-link {{ $activeTab === 'qa' ? 'active' : '' }}" wire:click="setActiveTab('qa')">Q&A</a></li>
</ul>

<div class="tab-content mt-3">
@if($activeTab === 'details')
<div id="details">
    <h3>Product Details</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua...
    </p>
</div>
@endif

@if($activeTab === 'reviews')
<div id="reviews">
    <h3>Product Reviews</h3>
    <p>
        Review: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua...
    </p>
</div>
@endif

@if($activeTab === 'qa')
<div id="qa">
    <h3>Product Q&A</h3>
    <p>
       QA:  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua...
    </p>
</div>
@endif
</div>
</div>

</div>
