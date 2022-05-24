<?php

/**
  * @OA\Get(
  *      path="/v1/entities/peta-ideologi",
  *      operationId="browseD.IN.2-PetadanSimbolSektorpadaBidangIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"peta-ideologi"},
  *      summary="Browse D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Returns list of D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/peta-ideologi/read?slug=peta-ideologi&id={id}",
  *      operationId="readD.IN.2-PetadanSimbolSektorpadaBidangIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"peta-ideologi"},
  *      summary="Get D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan based on id",
  *      description="Returns D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/peta-ideologi/add",
  *      operationId="addD.IN.2-PetadanSimbolSektorpadaBidangIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"peta-ideologi"},
  *      summary="Insert new D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Insert new D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"peta":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/peta-ideologi/edit",
  *      operationId="editD.IN.2-PetadanSimbolSektorpadaBidangIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"peta-ideologi"},
  *      summary="Edit an existing D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Edit an existing D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"peta":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/peta-ideologi/delete",
  *      operationId="deleteD.IN.2-PetadanSimbolSektorpadaBidangIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"peta-ideologi"},
  *      summary="Delete one record of D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Delete one record of D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-ideologi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/peta-ideologi/delete-multiple",
  *      operationId="deleteMultipleD.IN.2-PetadanSimbolSektorpadaBidangIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"peta-ideologi"},
  *      summary="Delete multiple record of D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Delete multiple record of D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-ideologi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/peta-ideologi/sort",
  *      operationId="sortD.IN.2-PetadanSimbolSektorpadaBidangIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"peta-ideologi"},
  *      summary="Sort existing D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Sort existing D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="peta-ideologi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "peta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "peta":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="peta"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */