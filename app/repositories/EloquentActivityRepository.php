<?php

class EloquentActivityRepository implements ActivityRepositoryInterface {
      public function findById($id)
      {     



           return Response::json(Activity::with('venue')->with('studio')->find($id)->toArray());
      }


      public function findAll()
      {
        return Activity::all();
      }

      public function findSponsors($id) {
            return Response::json(Activity::with('sponsor')->find($id)->toArray());
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