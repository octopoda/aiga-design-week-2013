<?php

class EloquentDaysRepository implements DaysRepositoryInterface {
      public function findById($id)
      {
           return Response::json(Day::find($id)->toArray());
      }

      public function findAll()
      {
            return Day::all();
      }

      public function eventsForDay() {
            return Response::json(Day::with('activity')->get()->toArray());
      }

      public function DayByName($name){

      }

      public function paginate($limit = null)
      {

      }

      public function store($data)
      {

      }

      public function update($id, $data)
      {

      }

      public function destroy($id)
      {

      }

      public function validate($data)
      {

      }

      public function instance($data = array())
      {

      }
}