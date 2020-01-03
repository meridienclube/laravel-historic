
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head" id="historics">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">{{ $title }}</h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="kt-timeline-v2 historics">
            @forelse($historics as $historic)
                @php
                    $prefixLang = isset($historic->historicable)? str_replace('_', 's.', $historic->historicable->getTable()) . '.' : null;
                @endphp
                <div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
                    <div class="kt-timeline-v2__item">
                            <span class="kt-timeline-v2__item-time">
                                {{ $historic->created_at->format('d/m/Y') }}
                            </span>
                        <div class="kt-timeline-v2__item-cricle">
                            <i class="fa fa-genderless kt-font-danger"></i>
                        </div>
                        <div class="kt-timeline-v2__item-text  kt-padding-top-5">
                            <a href="#" class="kt-link kt-link--brand kt-font-bolder">
                                {{ __($historic->title ?? '') }}
                            </a>
                            -
                            {{ __($historic->data['content'] ?? '') }}

                            @if(isset($historic->data['additions']))
                                @foreach($historic->data['additions'] as $additions_k => $additions_v)
                                    <div class="kt-widget5__info">
                                        <span class="kt-font-info">{{ __($prefixLang . $additions_k) }}</span>
                                        <span> criado como </span>
                                        <span class="kt-font-info">{{ $additions_v }}</span>
                                    </div>
                                @endforeach
                                <div class=" clearfix"></div>
                            @endif

                            @if(isset($historic->data['changes']))
                                @foreach($historic->data['changes'] as $changes_k => $changes_v)
                                    <div class="kt-widget5__info">
                                        <span class="kt-font-info">{{ __($prefixLang . $changes_k) }}</span>
                                        <span> alterado para </span>
                                        <span class="kt-font-info">{{ $changes_v }}</span>
                                    </div>
                                @endforeach
                                <div class=" clearfix"></div>
                            @endif

                            <div class=" clearfix"></div>
                            <span class="kt-timeline-v3__item-user-name">
                            <span class="kt-font-secundary kt-font-bold">
                                {{ $historic->created_at->diffForHumans() }}
                            </span> -
                            <a href="#" class="kt-link kt-link--dark kt-timeline-v3__itek-link">
                                {{ isset($historic->user)? $historic->user->name : 'Sistema SGM' }}
                            </a>
                        </span>
                        </div>
                    </div>
                </div>
            @empty
                <p>{{ __('historics.none') }}</p>
            @endforelse
        </div>
    </div>
</div>

@push('styles')
    <style>
        .kt-timeline-v2.historics .kt-timeline-v2__items .kt-timeline-v2__item .kt-timeline-v2__item-time {
            display: table-cell;
            font-size: 1.3rem;
            font-weight: 500;
            vertical-align: top;
            position: absolute;
            padding-top: .18rem;
            color: #74788d;
        }

        .kt-timeline-v2.historics .kt-timeline-v2__items .kt-timeline-v2__item .kt-timeline-v2__item-cricle {
            border-radius: 50%;
            border: .89rem solid #fff;
            z-index: 1;
            top: .2rem;
            left: 7rem;
            position: relative;
        }

        .kt-timeline-v2.historics .kt-timeline-v2__items .kt-timeline-v2__item .kt-timeline-v2__item-text {
            display: table-cell;
            vertical-align: top;
            font-size: 1rem;
            padding: .35rem 0 0 7.5rem;
            color: #74788d;
        }

        .kt-timeline-v2:before {
            content: '';
            position: absolute;
            left: 7.7rem;
            width: .214rem;
            top: 5px;
            bottom: 5px;
            height: calc(100% - 5px);
            background-color: #e7e9f5;
        }
    </style>
@endpush
