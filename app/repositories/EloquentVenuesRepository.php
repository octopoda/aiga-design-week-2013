<?php

class EloquentVenuesRepository implements VenuesRepositoryInterface {
      public function findById($id)
      {
           // return Response::json(Calories::find($id)->toArray());
      }

      public function findAll()
      {
        //return Calories::all();
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