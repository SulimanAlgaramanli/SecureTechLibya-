@extends('layouts.app')

@section('content')


<div class="container py-5">
  <h2 class="main-heading">Our Products</h2>

  <!-- Products Sections -->
  <x-product-section title="Surveillance Cameras" :brands="['dahua', 'hikvision', 'uniview']" type="camera" />

  <x-product-section title="Alarm & Detection Devices" :brands="['dahua', 'hikvision', 'ajax']" type="sensor" />

  <x-product-section title="Attendance & Access Control" :brands="['zk','dahua', 'hikvision']" type="attendance" />

  <x-product-section title="Door Bells" :brands="['commax', 'dahua', 'hikvision']" type="doorbell" />

  <x-product-section title="Automatic Gate Motors" :brands="['faac', 'falcon', 'bft']" type="motor" />
</div>

@endsection
