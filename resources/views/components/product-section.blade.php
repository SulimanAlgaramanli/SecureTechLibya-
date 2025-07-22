@props(['title', 'brands', 'type'])

<h4 class="mb-3">{{ $title }}</h4>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  @foreach ($brands as $brand)
    @php
      // روابط المواقع الرسمية للبراندات
      $links = [
        'dahua' => 'https://www.dahuatech.com',
        'hikvision' => 'https://www.hikvision.com',
        'uniview' => 'https://en.uniview.com',
        'ajax' => 'https://ajax.systems',
        'zk' => 'https://www.zkteco.com',
        'commax' => 'https://www.commax.com',
        'faac' => 'https://www.faacgroup.com',
        'falcon' => '#', // ضع الرابط الصحيح إن وجد
        'bft' => 'https://www.bft-automation.com',
      ];

      $url = $links[$brand] ?? '#'; // رابط البراند أو علامة # إن لم يوجد
    @endphp

    <div class="col">
      <div class="card h-100">
        <a href="{{ $url }}" target="_blank" class="text-decoration-none text-dark">
          <img src="{{ asset('images/' . $brand . '_' . $type . '.png') }}" alt="{{ ucfirst($brand) }} {{ ucfirst($type) }}" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">{{ ucfirst($brand) }} {{ ucwords(str_replace('-', ' ', $type)) }}</h5>
          </div>
        </a>
      </div>
    </div>
  @endforeach
</div>
