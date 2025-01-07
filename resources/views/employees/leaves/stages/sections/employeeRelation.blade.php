<div class="col-12">
    <div class="row">
        <!-- Last Resumption Date -->
        <div class="col-4 col-md-2">
            <div class="staInfoPosition d-flex flex-column mx-2">
                <h2>Last Resumption Date</h2>
                <div class="boxInfoName boxSearshName">
                    <input type="date" name="employee_relation_last_resumption_date[{{ $stage->id }}]" placeholder="Select Date">
                </div>
            </div>
        </div>

        <!-- Number Of Leave Taken Last 1 Year -->
        <div class="col-4 col-md-2">
            <div class="staInfoPosition d-flex flex-column mx-2">
                <h2>Number Of Leave Taken Last 1 Year</h2>
                <div class="boxInfoName boxSearshName">
                    <input type="text" name="employee_relation_leave_taken_last_year[{{ $stage->id }}]">
                </div>
            </div>
        </div>

        <!-- Leave Entitlement -->
        <div class="col-4 col-md-2">
            <div class="staInfoPosition d-flex flex-column mx-2">
                <h2>Leave Entitlement</h2>
                <div class="boxInfoName boxSearshName">
                    <input type="text" name="employee_relation_leave_entitlement[{{ $stage->id }}]">
                </div>
            </div>
        </div>

        <!-- Project Resumption -->
        <div class="col-4 col-md-2">
            <div class="staInfoPosition p-0 border-none d-flex flex-column mx-2">
                <h2>Project Resumption</h2>
                <div class="boxInfoName boxSearshName">
                    <input type="text" name="employee_relation_project_resumption[{{ $stage->id }}]">
                </div>
            </div>
        </div>

        <!-- Flight Ticket Sector -->
        <div class="col-4 col-md-4">
            <div class="staInfoPosition d-flex flex-column mx-2">
                <h2>Flight Ticket Sector</h2>
                <div class="boxInfoName boxSearshName">
                    <input type="text" name="employee_relation_flight_ticket_sector[{{ $stage->id }}]" placeholder="Your Sector">
                </div>
            </div>
        </div>

        <!-- Work Handover Attached -->
        <div class="col-4 col-md-3">
            <div class="review-section mx-2 review-section-gray d-flex justify-content-between align-items-center">
                <label for="work-handover">Work Handover Attached</label>
                <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_work_handover_attached[{{ $stage->id }}]" class="yes" value="yes">
                        <span>YES</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_work_handover_attached[{{ $stage->id }}]" class="na" value="na">
                        <span>N/A</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Exit Permit -->
        <div class="col-4 col-md-2">
            <div class="review-section mx-2 review-section-gray d-flex justify-content-between align-items-center">
                <label for="work-handover">Exit Permit</label>
                <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_exit_permit[{{ $stage->id }}]" class="yes" value="yes">
                        <span>YES</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_exit_permit[{{ $stage->id }}]" class="na" value="na">
                        <span>N/A</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Ticket Entitled -->
        <div class="col-4 col-md-2">
            <div class="review-section mx-2 review-section-gray d-flex justify-content-between align-items-center">
                <label for="work-handover">Ticket Entitled</label>
                <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_ticket_entitled[{{ $stage->id }}]" class="yes" value="yes">
                        <span>YES</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_ticket_entitled[{{ $stage->id }}]" class="na" value="na">
                        <span>N/A</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Return Quarantine -->
        <div class="col-4 col-md-3">
            <div class="review-section mx-2 review-section-gray d-flex justify-content-between align-items-center">
                <label for="work-handover">Return Quarantine</label>
                <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_return_quarantine[{{ $stage->id }}]" class="yes" value="yes">
                        <span>YES</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_return_quarantine[{{ $stage->id }}]" class="na" value="na">
                        <span>N/A</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Vaccinated -->
        <div class="col-4 col-md-2">
            <div class="review-section mx-2 review-section-gray d-flex justify-content-between align-items-center">
                <label for="work-handover">Vaccinated</label>
                <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_vaccinated[{{ $stage->id }}]" class="yes" value="yes">
                        <span>YES</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_vaccinated[{{ $stage->id }}]" class="na" value="na">
                        <span>N/A</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Clearance Required -->
        <div class="col-12 col-md-6">
            <div class="review-section mx-2 review-section-red d-flex flex-md-row flex-column justify-content-between align-items-center">
                <label for="work-handover">Clearance Required</label>
                <div class="buttons buttonsPrint d-flex justify-content-center align-items-center">
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_clearance_required[{{ $stage->id }}]" class="no" value="no" id="noClearance">
                        <span>N/a</span>
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="employee_relation_clearance_required[{{ $stage->id }}]" class="yes" checked="checked" value="yes" id="yesClearance">
                        <span>YES</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Comments -->
        <div class="col-12 col-md-6">
            <div class="comments-section mt-3 mt-md-0 mx-2">
                <textarea class="comments" name="employee_relation_comments[{{ $stage->id }}]" placeholder="Comments"></textarea>
            </div>
        </div>
    </div>
</div>
