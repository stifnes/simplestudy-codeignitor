<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main>
      <header>
        <img src="<?php echo base_url(); ?>/images/Logo.svg" alt="logo" />
      </header>
      <div class="steps">
        <div class="step active"></div>
        <div class="step"></div>
        <div class="step"></div>
        <div class="step"></div>
      </div>
      <!-- content-section -->
      <section>
        <h1>Your Study Goals</h1>
        <p>Let us know so we can help</p>
        <div class="slider">
          <div class="slides">
            <div class="slide fade" id="slide1">
              <div class="dropdown">
                <button
                  onclick="showDropdown('schoolLikeDropdown')"
                  class="dropbtn"
                >
                  <span data-target="schoolLikeDropdown">
                    What School Do You like?
                  </span>
                  <img
                    src="<?php echo base_url(); ?>/images/dropdown-arrow.svg"
                    alt="dropdown arrow"
                    id="schoolLikeDropdownarrow"
                  />
                </button>
                <div id="schoolLikeDropdown" class="dropdown-content">
                  <a
                    href="#"
                    onclick="selectDropdownValue('schoolLikeDropdown',event)"
                    >TU Dublin</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('schoolLikeDropdown',event)"
                    >Trinity College</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('schoolLikeDropdown',event)"
                    >UCD</a
                  >
                </div>
              </div>
              <div class="dropdown">
                <button
                  onclick="showDropdown('schoolAttendDropdown')"
                  class="dropbtn"
                >
                  <span data-target="schoolAttendDropdown">
                    What School Do You Attend?
                  </span>
                  <img
                    src="<?php echo base_url(); ?>/images/dropdown-arrow.svg"
                    alt="dropdown arrow"
                    id="schoolAttendDropdownarrow"
                  />
                </button>
                <div id="schoolAttendDropdown" class="dropdown-content">
                  <a
                    href="#"
                    onclick="selectDropdownValue('schoolAttendDropdown',event)"
                    >TU Dublin</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('schoolAttendDropdown',event)"
                    >Trinity College</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('schoolAttendDropdown',event)"
                    >UCD</a
                  >
                </div>
              </div>
            </div>
            <div class="slide fade" id="slide2">
              <div class="dropdown">
                <button
                  class="dropbtn"
                  onclick="showDropdown('collegeAttendDropdown')"
                >
                  <span data-target="collegeAttendDropdown">
                    What college Do You Attend?
                  </span>
                  <img
                    src="<?php echo base_url(); ?>/images/dropdown-arrow.svg"
                    alt="dropdown arrow"
                    id="collegeAttendDropdownarrow"
                  />
                </button>
                <div id="collegeAttendDropdown" class="dropdown-content">
                  <a
                    href="#"
                    onclick="selectDropdownValue('collegeAttendDropdown',event)"
                    >TU Dublin</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('collegeAttendDropdown',event)"
                    >Trinity College</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('collegeAttendDropdown',event)"
                    >UCD</a
                  >
                </div>
              </div>
              <div class="dropdown">
                <button
                  class="dropbtn"
                  onclick="showDropdown('collegeLikeDropdown')"
                >
                  <span data-target="collegeLikeDropdown">
                    What college Do You like?
                  </span>
                  <img
                    src="<?php echo base_url(); ?>/images/dropdown-arrow.svg"
                    alt="dropdown arrow"
                    id="collegeLikeDropdownarrow"
                  />
                </button>
                <div id="collegeLikeDropdown" class="dropdown-content">
                  <a
                    href="#"
                    onclick="selectDropdownValue('collegeLikeDropdown',event)"
                    >TU Dublin</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('collegeLikeDropdown',event)"
                    >Trinity College</a
                  >
                  <a
                    href="#"
                    onclick="selectDropdownValue('collegeLikeDropdown',event)"
                    >UCD</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="slider-bullets">
            <div class="bullet fill" onclick="currentSlide(1)"></div>
            <div class="bullet" onclick="currentSlide(2)"></div>
          </div>
        </div>
        <button id="continueBtn" onclick="plusSlides(1)">Continue</button>
      </section>
    </main>
