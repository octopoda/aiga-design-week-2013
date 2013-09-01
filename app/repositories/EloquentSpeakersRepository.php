<?php

class EloquentSpeakersRepository implements SpeakersRepositoryInterface {
      public function findById($id)
      {
            //return Response::json(DB::table('speakers')->where('talk_id', '=', $id)->get());
           return Response::json(Talk::with('Speaker')->orderBy('position', 'ASC')->where('activity_id', '=', $id)->get());
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