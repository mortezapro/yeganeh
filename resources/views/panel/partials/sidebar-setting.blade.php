<div class="right-bar">
    <div data-simplebar class="h-100">
        <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                    <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                    <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content pt-0">
            <div class="tab-pane" id="tasks-tab" role="tabpanel">
                <h6 class="fw-medium p-3 m-0 text-uppercase">تنظیمات کش</h6>
                <div class="px-2">
                    <a href="{{ route("admin.route.clear") }}" class="mb-3 d-block">ریست کردن مسیرها</a>
                    <a href="{{ route("admin.cache.clear") }}" class="mb-3 d-block">ریست کردن دیتابیس</a>
                    <a href="{{ route("admin.view.clear") }}" class="mb-3 d-block">ریست کردن فرانت اند</a>
                    <a href="{{ route("admin.config.clear") }}" class="mb-3 d-block">ریست کردن تنظیمات</a>

                </div>


            </div>
            <div class="tab-pane active" id="settings-tab" role="tabpanel">
                <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                    <span class="d-block py-1">تنظیمات تم</span>
                </h6>
                <div class="p-3">
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">شمای رنگی</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                               id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">روشن</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                               id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">تاریک</label>
                    </div>
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">طول صفحه</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-width" value="fluid" id="fluid-check" checked />
                        <label class="form-check-label" for="fluid-check">تمام صفحه</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-width" value="boxed" id="boxed-check" />
                        <label class="form-check-label" for="boxed-check">باکس</label>
                    </div>
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">رنگ سایدبار</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light-check" />
                        <label class="form-check-label" for="light-check">روشن</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark-check" checked/>
                        <label class="form-check-label" for="dark-check">تاریک</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand-check" />
                        <label class="form-check-label" for="brand-check">رنگ برند</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient-check" />
                        <label class="form-check-label" for="gradient-check">گرادیانت</label>
                    </div>
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">رنگ منوی بالایی</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                               checked />
                        <label class="form-check-label" for="darktopbar-check">تاریک</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                        <label class="form-check-label" for="lighttopbar-check">روشن</label>
                    </div>
                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">ریست کردن تنظیمات</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rightbar-overlay"></div>
