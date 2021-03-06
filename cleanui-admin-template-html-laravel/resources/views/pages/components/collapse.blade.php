@extends ('layouts.app')

@section('content')
<!-- START: components/collapse -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Collapse</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/components/collapse/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Accordion</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/collapse/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="accordion" id="accordion" role="tablist">
            <div class="card">
              <div
                class="card-header collapsed"
                role="tab"
                id="headingOne"
                data-toggle="collapse"
                data-parent="#accordion"
                data-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                <div class="card-title">
                  <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                  </span>
                  <a>
                    Collapsible Group Item #1
                  </a>
                </div>
              </div>
              <div id="collapseOne" class="card-collapse collapse" aria-labelledby="headingOne">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div
                class="card-header collapsed"
                role="tab"
                id="headingTwo"
                data-toggle="collapse"
                data-parent="#accordion"
                data-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                <div class="card-title">
                  <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                  </span>
                  <a>
                    Collapsible Group Item #2
                  </a>
                </div>
              </div>
              <div id="collapseTwo" class="card-collapse collapse" aria-labelledby="headingTwo">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div
                class="card-header collapsed"
                role="tab"
                id="headingThree"
                data-toggle="collapse"
                data-parent="#accordion"
                data-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                <div class="card-title">
                  <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                  </span>
                  <a>
                    Collapsible Group Item #3
                  </a>
                </div>
              </div>
              <div id="collapseThree" class="card-collapse collapse" aria-labelledby="headingThree">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        <h5 class="text-black"><strong>Accordion with Spacing</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/collapse/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="accordion accordion-margin-bottom" id="accordion2" role="tablist">
            <div class="card">
              <div
                class="card-header collapsed"
                role="tab"
                id="headingOne2"
                data-toggle="collapse"
                data-parent="#accordion2"
                data-target="#collapseOne2"
                aria-expanded="true"
                aria-controls="collapseOne2"
              >
                <div class="card-title">
                  <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                  </span>
                  <a>
                    Collapsible Group Item #1
                  </a>
                </div>
              </div>
              <div id="collapseOne2" class="card-collapse collapse" aria-labelledby="headingOne2">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div
                class="card-header collapsed"
                role="tab"
                id="headingTwo2"
                data-toggle="collapse"
                data-parent="#accordion2"
                data-target="#collapseTwo2"
                aria-expanded="false"
                aria-controls="collapseTwo2"
              >
                <div class="card-title">
                  <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                  </span>
                  <a>
                    Collapsible Group Item #2
                  </a>
                </div>
              </div>
              <div id="collapseTwo2" class="card-collapse collapse" aria-labelledby="headingTwo2">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div
                class="card-header collapsed"
                role="tab"
                id="headingThree2"
                data-toggle="collapse"
                data-parent="#accordion2"
                data-target="#collapseThree2"
                aria-expanded="false"
                aria-controls="collapseThree2"
              >
                <div class="card-title">
                  <span class="accordion-indicator pull-right">
                    <i class="plus fa fa-plus"></i>
                    <i class="minus fa fa-minus"></i>
                  </span>
                  <a>
                    Collapsible Group Item #3
                  </a>
                </div>
              </div>
              <div
                id="collapseThree2"
                class="card-collapse collapse"
                aria-labelledby="headingThree2"
              >
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                  richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                  brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                  sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                  et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                  sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                  craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                  heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Collapse Control</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://getbootstrap.com/docs/4.2/components/collapse/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <button
            class="btn btn-primary"
            type="button"
            data-toggle="collapse"
            data-target="#collapseExample"
            aria-expanded="false"
            aria-controls="collapseExample"
          >
            Button with data-target
          </button>
          <br />
          <br />
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
              ad squid
            </div>
          </div>
          <br />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: components/collapse -->

@endsection