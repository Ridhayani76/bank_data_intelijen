<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-kerja-ekonomi",
  *      operationId="browseR.IN.3-RegisterKerjaEkonomidanKeuangan",
  *      tags={"register-kerja-ekonomi"},
  *      summary="Browse R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      description="Returns list of R.IN.3 - Register Kerja Ekonomi dan Keuangan",
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
  *      path="/v1/entities/register-kerja-ekonomi/read?slug=register-kerja-ekonomi&id={id}",
  *      operationId="readR.IN.3-RegisterKerjaEkonomidanKeuangan",
  *      tags={"register-kerja-ekonomi"},
  *      summary="Get R.IN.3 - Register Kerja Ekonomi dan Keuangan based on id",
  *      description="Returns R.IN.3 - Register Kerja Ekonomi dan Keuangan based on id",
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
  *      path="/v1/entities/register-kerja-ekonomi/add",
  *      operationId="addR.IN.3-RegisterKerjaEkonomidanKeuangan",
  *      tags={"register-kerja-ekonomi"},
  *      summary="Insert new R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      description="Insert new R.IN.3 - Register Kerja Ekonomi dan Keuangan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"waktu diterima":"Abc", "sumber":"Abc", "informasi":"Abc", "uraian peristiwa":"Abc", "catatan":"Abc", "disposisi":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-kerja-ekonomi/edit",
  *      operationId="editR.IN.3-RegisterKerjaEkonomidanKeuangan",
  *      tags={"register-kerja-ekonomi"},
  *      summary="Edit an existing R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      description="Edit an existing R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"waktu diterima":"Abc", "sumber":"Abc", "informasi":"Abc", "uraian peristiwa":"Abc", "catatan":"Abc", "disposisi":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-kerja-ekonomi/delete",
  *      operationId="deleteR.IN.3-RegisterKerjaEkonomidanKeuangan",
  *      tags={"register-kerja-ekonomi"},
  *      summary="Delete one record of R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      description="Delete one record of R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kerja-ekonomi",
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
  *      path="/v1/entities/register-kerja-ekonomi/delete-multiple",
  *      operationId="deleteMultipleR.IN.3-RegisterKerjaEkonomidanKeuangan",
  *      tags={"register-kerja-ekonomi"},
  *      summary="Delete multiple record of R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      description="Delete multiple record of R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kerja-ekonomi",
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
  *      path="/v1/entities/register-kerja-ekonomi/sort",
  *      operationId="sortR.IN.3-RegisterKerjaEkonomidanKeuangan",
  *      tags={"register-kerja-ekonomi"},
  *      summary="Sort existing R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      description="Sort existing R.IN.3 - Register Kerja Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kerja-ekonomi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "waktu diterima":"Abc", "sumber":"Abc", "informasi":"Abc", "uraian peristiwa":"Abc", "catatan":"Abc", "disposisi":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "waktu diterima":"Abc", "sumber":"Abc", "informasi":"Abc", "uraian peristiwa":"Abc", "catatan":"Abc", "disposisi":"Abc", "tindak lanjut":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="waktu diterima"), 
  *                         @OA\Property(type="string", property="sumber"), 
  *                         @OA\Property(type="string", property="informasi"), 
  *                         @OA\Property(type="string", property="uraian peristiwa"), 
  *                         @OA\Property(type="string", property="catatan"), 
  *                         @OA\Property(type="string", property="disposisi"), 
  *                         @OA\Property(type="string", property="tindak lanjut"), 
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