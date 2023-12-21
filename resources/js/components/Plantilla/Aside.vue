<template>
  <!--begin::Header-->
  <div class="app-sidebar-header flex-column mx-10 pt-8" id="kt_app_sidebar_header">
    <!--begin::Brand-->
    <div class="d-flex flex-stack d-none d-lg-flex mb-13">
      <!--begin::Logo-->
      <a href="index.htm.html?page=index" class="app-sidebar-logo">
        <img
          alt="Logo"
          src="assets/media/logos/default.svg"
          class="h-30px app-sidebar-logo-default"
        />
      </a>

      <div class="d-flex align-items-center">
        <div
          class="btn btn-icon w-15px h-15px w-lg-20px h-lg-20px btn-color-success position-relative"
          data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
          data-kt-menu-attach="parent"
          data-kt-menu-placement="bottom-start"
        >
          <i class="fonticon-stats fs-2"></i>

          <span
            class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle ms-7 mb-3 animation-blink"
          >
          </span>

          <!--begin::Menu-->
          <div
            class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
            data-kt-menu="true"
            id="kt_menu_notifications"
          >
            <!--begin::Heading-->
            <div
              class="d-flex flex-column bgi-no-repeat rounded-top"
              style="
                background-image: url('/open-html-pro/assets/media/misc/menu-header-bg.jpg');
              "
            >
              <!--begin::Title-->
              <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                Notifications
                <span class="fs-8 opacity-75 ps-3">24 reports</span>
              </h3>
              <!--end::Title-->

              <!--begin::Tabs-->
              <ul
                class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                    data-bs-toggle="tab"
                    href="#kt_topbar_notifications_1"
                    aria-selected="false"
                    tabindex="-1"
                    role="tab"
                    >Alerts</a
                  >
                </li>

                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                    data-bs-toggle="tab"
                    href="#kt_topbar_notifications_2"
                    aria-selected="true"
                    role="tab"
                    >Updates</a
                  >
                </li>

                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                    data-bs-toggle="tab"
                    href="#kt_topbar_notifications_3"
                    aria-selected="false"
                    tabindex="-1"
                    role="tab"
                    >Logs</a
                  >
                </li>
              </ul>
              <!--end::Tabs-->
            </div>
            <!--end::Heading-->

            <!--begin::Tab content-->
            <div class="tab-content">
              <!--begin::Tab panel-->
              <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                <!--begin::Items-->
                <div class="scroll-y mh-325px my-5 px-8">
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-primary">
                          <i class="ki-duotone ki-abstract-28 fs-2 text-primary"
                            ><i class="path1"></i><i class="path2"></i
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Project Alice</a
                        >
                        <div class="text-gray-400 fs-7">Phase 1 development</div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">1 hr</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-danger">
                          <i class="ki-duotone ki-information fs-2 text-danger"
                            ><i class="path1"></i><i class="path2"></i
                            ><i class="path3"></i
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >HR Confidential</a
                        >
                        <div class="text-gray-400 fs-7">Confidential staff documents</div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-warning">
                          <i class="ki-duotone ki-briefcase fs-2 text-warning"
                            ><i class="path1"></i><i class="path2"></i
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Company HR</a
                        >
                        <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">5 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-success">
                          <i class="ki-duotone ki-abstract-12 fs-2 text-success"
                            ><i class="path1"></i><i class="path2"></i
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Project Redux</a
                        >
                        <div class="text-gray-400 fs-7">New frontend admin theme</div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 days</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-primary">
                          <i class="ki-duotone ki-colors-square fs-2 text-primary"
                            ><i class="path1"></i><i class="path2"></i
                            ><i class="path3"></i><i class="path4"></i
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Project Breafing</a
                        >
                        <div class="text-gray-400 fs-7">Product launch status update</div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">21 Jan</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-info">
                          <i class="ki-duotone ki-picture fs-2 text-info"></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Banner Assets</a
                        >
                        <div class="text-gray-400 fs-7">Collection of banner images</div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">21 Jan</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center">
                      <!--begin::Symbol-->
                      <div class="symbol symbol-35px me-4">
                        <span class="symbol-label bg-light-warning">
                          <i class="ki-duotone ki-color-swatch fs-2 text-warning"
                            ><i class="path1"></i><i class="path2"></i
                            ><i class="path3"></i><i class="path4"></i
                            ><i class="path5"></i><i class="path6"></i
                            ><i class="path7"></i><i class="path8"></i
                            ><i class="path9"></i><i class="path10"></i
                            ><i class="path11"></i><i class="path12"></i
                            ><i class="path13"></i><i class="path14"></i
                            ><i class="path15"></i><i class="path16"></i
                            ><i class="path17"></i><i class="path18"></i
                            ><i class="path19"></i><i class="path20"></i
                            ><i class="path21"></i
                          ></i>
                        </span>
                      </div>
                      <!--end::Symbol-->

                      <!--begin::Title-->
                      <div class="mb-0 me-2">
                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold"
                          >Icon Assets</a
                        >
                        <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">20 March</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Items-->

                <!--begin::View more-->
                <div class="py-3 text-center border-top">
                  <a
                    href="index.htm-7.html?page=pages/user-profile/activity"
                    class="btn btn-color-gray-600 btn-active-color-primary"
                  >
                    View All
                    <i class="ki-duotone ki-arrow-right fs-5"
                      ><i class="path1"></i><i class="path2"></i
                    ></i>
                  </a>
                </div>
                <!--end::View more-->
              </div>
              <!--end::Tab panel-->

              <!--begin::Tab panel-->
              <div
                class="tab-pane fade show active"
                id="kt_topbar_notifications_2"
                role="tabpanel"
              >
                <!--begin::Wrapper-->
                <div class="d-flex flex-column px-9">
                  <!--begin::Section-->
                  <div class="pt-10 pb-0">
                    <!--begin::Title-->
                    <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="text-center text-gray-600 fw-semibold pt-1">
                      Outlines keep you honest. They stoping you from amazing poorly about
                      drive
                    </div>
                    <!--end::Text-->

                    <!--begin::Action-->
                    <div class="text-center mt-5 mb-9">
                      <a
                        href="#"
                        class="btn btn-sm btn-primary px-6"
                        data-bs-toggle="modal"
                        data-bs-target="#kt_modal_upgrade_plan"
                        >Upgrade</a
                      >
                    </div>
                    <!--end::Action-->
                  </div>
                  <!--end::Section-->

                  <!--begin::Illustration-->
                  <div class="text-center px-4">
                    <img
                      class="mw-100 mh-200px"
                      alt="image"
                      src="assets/media/illustrations/dozzy-1/1.png"
                    />
                  </div>
                  <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Tab panel-->

              <!--begin::Tab panel-->
              <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                <!--begin::Items-->
                <div class="scroll-y mh-325px my-5 px-8">
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4">200 OK</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >New order</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Just now</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >New customer</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4">200 OK</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >Payment process</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">5 hrs</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >Search query</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">2 days</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4">200 OK</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >API connection</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">1 week</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-success me-4">200 OK</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >Database restore</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Mar 5</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >System update</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">May 15</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >Server OS update</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Apr 3</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >API rollback</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Jun 30</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >Refund process</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Jul 10</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >Withdrawal process</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Sep 10</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <div class="d-flex flex-stack py-4">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Code-->
                      <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                      <!--end::Code-->

                      <!--begin::Title-->
                      <a href="#" class="text-gray-800 text-hover-primary fw-semibold"
                        >Mail tasks</a
                      >
                      <!--end::Title-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Label-->
                    <span class="badge badge-light fs-8">Dec 10</span>
                    <!--end::Label-->
                  </div>
                  <!--end::Item-->
                </div>
                <!--end::Items-->

                <!--begin::View more-->
                <div class="py-3 text-center border-top">
                  <a
                    href="index.htm-7.html?page=pages/user-profile/activity"
                    class="btn btn-color-gray-600 btn-active-color-primary"
                  >
                    View All
                    <i class="ki-duotone ki-arrow-right fs-5"
                      ><i class="path1"></i><i class="path2"></i
                    ></i>
                  </a>
                </div>
                <!--end::View more-->
              </div>
              <!--end::Tab panel-->
            </div>
            <!--end::Tab content-->
          </div>
          <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
      </div>
      <!--end::Chat-->
    </div>
    <!--end::Brand-->

    <!--begin::User-->
    <div
      class="d-flex btn btn-outline btn-custom align-items-center w-200 mb-2"
      data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
      data-kt-menu-attach="parent"
      data-kt-menu-placement="bottom-start"
    >
      <!--begin::User-->
      <div class="cursor-pointer symbol symbol-35px symbol-lg-40px me-3 ms-n2">
        <img class="" src="assets/media/avatars/300-3.jpg" alt="user" />
      </div>
      <!--end::User-->

      <!--begin:Info-->
      <div class="d-flex flex-column align-items-start flex-grow-1">
        <a
          href="index.htm-8.html?page=pages/user-profile/projects"
          class="btn-title fs-6 fw-bold"
          >Johnson</a
        >

        <a
          href="index.htm-9.html?page=pages/user-profile/overview"
          class="btn-desc fs-7 fw-bold d-block"
          >React Developer</a
        >
      </div>
      <!--end:Info-->

      <i class="ki-duotone ki-icons/duotune/general/gen033.svg btn-icon fs-2 me-n2"></i>
    </div>

    <!--begin::User account menu-->
    <div
      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
      data-kt-menu="true"
      style=""
    >
      <!--begin::Menu item-->
      <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
          <!--begin::Avatar-->
          <div class="symbol symbol-50px me-5">
            <img alt="Logo" src="assets/media/avatars/300-3.jpg" />
          </div>
          <!--end::Avatar-->

          <!--begin::Username-->
          <div class="d-flex flex-column">
            <div class="fw-bold d-flex align-items-center fs-5">
              Johnson
              <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2"
                >Pro</span
              >
            </div>

            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
              React Developer
            </a>
          </div>
          <!--end::Username-->
        </div>
      </div>
      <!--end::Menu item-->

      <!--begin::Menu separator-->
      <div class="separator my-2"></div>
      <!--end::Menu separator-->

      <!--begin::Menu item-->
      <div class="menu-item px-5">
        <a href="index.htm-10.html?page=account/overview" class="menu-link px-5">
          My Perfil
        </a>
      </div>

      <!--begin::Menu separator-->
      <div class="separator my-2"></div>

      <div class="menu-item px-5">
        <a
          href="index.htm-12.html?page=authentication/sign-in/basic"
          class="menu-link px-5"
        >
          Salir
        </a>
      </div>
      <!--end::Menu item-->
    </div>
    <!--end::User account menu-->

    <!--end::User-->
  </div>
  <!--end::Header-->

  <!--begin::Navs-->
  <div class="app-sidebar-navs flex-column-fluid pb-6" id="kt_app_sidebar_navs">
    <div
      id="kt_app_sidebar_navs_wrappers"
      class="hover-scroll-y my-2"
      data-kt-scroll="true"
      data-kt-scroll-activate="true"
      data-kt-scroll-height="auto"
      data-kt-scroll-dependencies="#kt_app_sidebar_header"
      data-kt-scroll-wrappers="#kt_app_sidebar_navs"
      data-kt-scroll-offset="5px"
      style="height: 281px"
    >
      <!--begin::Sidebar menu-->
      <div
        id="#kt_app_sidebar_menu"
        data-kt-menu="true"
        data-kt-menu-expand="false"
        class="menu menu-column menu-rounded menu-sub-indention menu-active-bg mb-7"
      >
        <!--begin:Menu item-->
        <div class="menu-item pt-5">
          <!--begin:Menu content-->
          <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-5">Dashboards</span>
          </div>
          <!--end:Menu content-->
        </div>
        <!--end:Menu item--><!--begin:Menu item-->
        <div class="menu-item">
          <!--begin:Menu link-->
          <router-link to="/" class="menu-link active">
            <span class="menu-icon"
              ><i class="ki-duotone ki-element-11 fs-1"
                ><i class="path1"></i><i class="path2"></i><i class="path3"></i
                ><i class="path4"></i></i></span
            ><span class="menu-title">Default</span>
          </router-link>
        </div>
        <!--end:Menu item--><!--begin:Menu item-->

        <div class="menu-item pt-7">
          <!--begin:Menu content-->
          <div class="menu-content">
            <span class="menu-heading fw-bold text-uppercase fs-5">PAGINAS</span>
          </div>
          <!--end:Menu content-->
        </div>
        <!--end:Menu item--><!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <!--begin:Menu link--><span class="menu-link"
            ><span class="menu-icon"
              ><i class="ki-duotone ki-abstract-41 fs-1"
                ><i class="path1"></i><i class="path2"></i></i></span
            ><span class="menu-title">Categorias</span
            ><span class="menu-arrow"></span></span
          ><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->

            <div class="menu-item">
              <router-link to="/categorias" class="menu-link"
                ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span
                ><span class="menu-title">Lista de Categorias</span>
              </router-link>
            </div>
            <!--end:Menu item-->
          </div>
          <!--end:Menu sub-->
        </div>

        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <!--begin:Menu link--><span class="menu-link"
            ><span class="menu-icon"
              ><i class="ki-duotone ki-basket fs-1"
                ><i class="path1"></i><i class="path2"></i><i class="path3"></i
                ><i class="path4"></i></i></span
            ><span class="menu-title">Cursos</span><span class="menu-arrow"></span></span
          ><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->

            <div class="menu-item">
              <router-link to="/cursos" class="menu-link"
                ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span
                ><span class="menu-title">Lista de Cursos</span>
              </router-link>
            </div>
          </div>
          <!--end:Menu sub-->
        </div>
        <!--end:Menu item--><!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
          <!--begin:Menu link--><span class="menu-link"
            ><span class="menu-icon"
              ><i class="ki-duotone ki-abstract-28 fs-1"
                ><i class="path1"></i><i class="path2"></i></i></span
            ><span class="menu-title">Clientes</span
            ><span class="menu-arrow"></span></span
          ><!--end:Menu link--><!--begin:Menu sub-->
          <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->

            <!--end:Menu item--><!--begin:Menu item-->

            <!--end:Menu item--><!--begin:Menu item-->
            <div class="menu-item">
              <router-link to="/clientes" class="menu-link">
                <span class="menu-bullet"><span class="bullet bullet-dot"></span> </span>
                <span class="menu-title">Lista de Clientes</span>
              </router-link>
            </div>
          </div>

          <!--end:Menu sub-->
        </div>
      </div>
    </div>
  </div>
</template>
