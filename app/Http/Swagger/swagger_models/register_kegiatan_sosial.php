<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-kegiatan-sosial",
  *      operationId="browseR.IN.8-RegisterKegiatanSosialBudayadanKemasyarakatan",
  *      tags={"register-kegiatan-sosial"},
  *      summary="Browse R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      description="Returns list of R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
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
  *      path="/v1/entities/register-kegiatan-sosial/read?slug=register-kegiatan-sosial&id={id}",
  *      operationId="readR.IN.8-RegisterKegiatanSosialBudayadanKemasyarakatan",
  *      tags={"register-kegiatan-sosial"},
  *      summary="Get R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan based on id",
  *      description="Returns R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan based on id",
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
  *      path="/v1/entities/register-kegiatan-sosial/add",
  *      operationId="addR.IN.8-RegisterKegiatanSosialBudayadanKemasyarakatan",
  *      tags={"register-kegiatan-sosial"},
  *      summary="Insert new R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      description="Insert new R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan into database",
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
  *      path="/v1/entities/register-kegiatan-sosial/edit",
  *      operationId="editR.IN.8-RegisterKegiatanSosialBudayadanKemasyarakatan",
  *      tags={"register-kegiatan-sosial"},
  *      summary="Edit an existing R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      description="Edit an existing R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
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
  *      path="/v1/entities/register-kegiatan-sosial/delete",
  *      operationId="deleteR.IN.8-RegisterKegiatanSosialBudayadanKemasyarakatan",
  *      tags={"register-kegiatan-sosial"},
  *      summary="Delete one record of R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      description="Delete one record of R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-sosial",
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
  *      path="/v1/entities/register-kegiatan-sosial/delete-multiple",
  *      operationId="deleteMultipleR.IN.8-RegisterKegiatanSosialBudayadanKemasyarakatan",
  *      tags={"register-kegiatan-sosial"},
  *      summary="Delete multiple record of R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      description="Delete multiple record of R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-sosial",
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
  *      path="/v1/entities/register-kegiatan-sosial/sort",
  *      operationId="sortR.IN.8-RegisterKegiatanSosialBudayadanKemasyarakatan",
  *      tags={"register-kegiatan-sosial"},
  *      summary="Sort existing R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      description="Sort existing R.IN.8 - Register Kegiatan Sosial Budaya dan Kemasyarakatan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-kegiatan-sosial",
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