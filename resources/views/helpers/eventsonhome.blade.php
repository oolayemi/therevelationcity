<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Events</span>
          <h2>Latest Events</h2>
        </div>
      </div>

        @if(Auth::check() && auth()->user()->role == "admin")
        <div class="text-right ftco-animate">
          <p class="mb-0"> <a href="/events" class="btn btn-primary py-2 mb-2 px-2 px-md-4"> Add new Events</a></p>
        </div>
        @endif


      <div class="row">
          @if(count($events) > 0)
              @foreach($events as $event)
            <div class="col-md-12 event-wrap d-md-flex ftco-animate">
              <div class="img" style="background-image: url( {{ asset($event->imagepath) }} );"></div>
              <div class="text p-4 px-md-5 d-flex align-items-center">

                    @if(Auth::check() && auth()->user()->role == "admin")
                  <form action="deleteProcess.php?id=id imagepath" method="POST">
                    <button type="submit" name="deleteEvent" id="deleteEvent" class="delete" title="Delete Event" style="background: none; border: none;">&times;</button>
                  </form>
                    @endif

                <div class="desc">
                  <h2 class="mb-2"><a href="events">{{ $event->title }}</a></h2>
                  <div class="meta">
                    <p>
                      <span><i class="fa fa-calendar mr-2"></i>{{ $event->date }}</span>
                      <span><i class="fa fa-clock-o mr-2"></i>{{ $event->starttime }} - {{ $event->endtime }} </span>
                      <span><i class="fa fa-map-marker mr-2"></i> <a href="#">{{ $event->location}}</a></span>
                      <span><i class="fa fa-building mr-2"></i>{{ $event->address}}</span>
                    </p>
                  </div>
                  <p><a href="/events" class="btn btn-primary">More Details</a></p>
                </div>
              </div>
            </div>
              @endforeach
          @else
              <h2 class="my-2 text-center col-md-12">No event added yet</h2>
          @endif
      </div>
    </div>
  </section>
