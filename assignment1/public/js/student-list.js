/**
 * To set data table
 */
$(document).ready(function() {
    const studentTable = $("#student-list").DataTable({
        sDom: "lrtip"
    });

    $("#search-click").click(function() {
      studentTable.search($("#search-keyword").val()).draw();
    });
});

/**
 * To show student detail
 * @param {Object} studentInfo studentinfo
 * @returns void
 */
function showStudentDetail(studentInfo) {
    $("#student-detail #student-title").text(studentInfo.title);
    $("#student-detail #student-description").text(studentInfo.description);
    if (studentInfo.status == "0") {
        $("#student-detail #student-status").text("Inactive");
    } else {
        $("#student-detail #student-status").text("Active");
    }
    $("#student-detail #student-created-at").text(
        moment(studentInfo.created_at).format("YYYY/MM/DD")
    );
    $("#student-detail #student-created-user").text(studentInfo.created_user);
    $("#student-detail #student-updated-at").text(
        moment(studentInfo.updated_at).format("YYYY/MM/DD")
    );
    $("#student-detail #student-updated-user").text(studentInfo.updated_user);
}

/**
 * To show student delete confirm
 * @param {Object} studentInfo studentInfo
 * @returns void
 */
function showDeleteConfirm(studentInfo) {
    $("#student-delete #student-id").text(studentInfo.id);
    $("#student-delete #student-title").text(studentInfo.title);
    $("#student-delete #student-description").text(studentInfo.description);
    if (studentInfo.status == "0") {
        $("#student-delete #student-status").text("Inactive");
    } else {
        $("#student-delete #student-status").text("Active");
    }
}

/**
 * To delete student by id
 * @returns void
 */
async function deleteStudentById(csrf_token) {
    await $.ajax({
        url: "/student/delete/" + $("#student-delete #student-id").text(),
        type: "DELETE",
        data: {
            _token: csrf_token
        },
        dataType: "text",
        success: function(result) {
            console.log(result);
            location.reload();
        }
    });
}
