
@extends('layouts.master')
@section('title', 'Current Plans')
@section('plans')
    <div class="results-body">
        <h1>Current Plans</h1>
        <table class="planner-table">
            <tr>
                <td class="planner-table-td">
                    <p id="plan-data">Example Plan<br></p>
                </td>
            </tr>
        </table>
        <form method="get" action="/addToPlanner">
            <label for="plan-user-data">Planner idea:</label><br>
            <input type="text" id="plan-user-data" name="plan-user-data"><br>
        </form>
        <button type="button" id="plannerAdd">Add to planner</button>
    </div>
@endsection

