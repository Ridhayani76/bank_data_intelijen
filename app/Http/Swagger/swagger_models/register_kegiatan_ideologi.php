<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-kegiatan-ideologi",
  *      operationId="browseR.IN.7-RegisterKegiatanIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"register-kegiatan-ideologi"},
  *      summary="Browse R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Returns list of R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
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
  *      path="/v1/entities/register-kegiatan-ideologi/read?slug=register-kegiatan-ideologi&id={id}",
  *      operationId="readR.IN.7-RegisterKegiatanIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"register-kegiatan-ideologi"},
  *      summary="Get R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan based on id",
  *      description="Returns R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan based on id",
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
  *      path="/v1/entities/register-kegiatan-ideologi/add",
  *      operationId="addR.IN.7-RegisterKegiatanIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"register-kegiatan-ideologi"},
  *      summary="Insert new R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Insert new R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-kegiatan-ideologi/edit",
  *      operationId="editR.IN.7-RegisterKegiatanIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"register-kegiatan-ideologi"},
  *      summary="Edit an existing R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Edit an existing R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-kegiatan-ideologi/delete",
  *      operationId="deleteR.IN.7-RegisterKegiatanIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"register-kegiatan-ideologi"},
  *      summary="Delete one record of R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Delete one record of R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-ideologi",
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
  *      path="/v1/entities/register-kegiatan-ideologi/delete-multiple",
  *      operationId="deleteMultipleR.IN.7-RegisterKegiatanIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"register-kegiatan-ideologi"},
  *      summary="Delete multiple record of R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Delete multiple record of R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-ideologi",
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
  *      path="/v1/entities/register-kegiatan-ideologi/sort",
  *      operationId="sortR.IN.7-RegisterKegiatanIdeologiPolitik,PertahanandanKeamanan",
  *      tags={"register-kegiatan-ideologi"},
  *      summary="Sort existing R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      description="Sort existing R.IN.7 - Register Kegiatan Ideologi Politik, Pertahanan dan Keamanan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-ideologi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="sektor"), 
  *                         @OA\Property(type="string", property="nomor"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="disposisi"), 
  *                         @OA\Property(type="string", property="nama petugas"), 
  *                         @OA\Property(type="string", property="hasil"), 
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